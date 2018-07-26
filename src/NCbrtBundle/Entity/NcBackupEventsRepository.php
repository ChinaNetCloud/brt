<?php

namespace NCbrtBundle\Entity;

use \Doctrine\ORM\EntityRepository;

/**
 * NcBackupEventsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NcBackupEventsRepository extends EntityRepository
{
    public function findByServerBackup($parameters)
    {
        $qb = $this->createQueryBuilder('n')
            ->join('n.srvrsServers', 's')
            ->where('n.backupmethod LIKE :backupmethod')
            ->setParameter('backupmethod', '%' . $parameters['backupmethod'] . '%')
            ->andWhere('s.name LIKE :server_name')
            ->setParameter('server_name', '%' . $parameters['server_name'] . '%')
            ->andWhere('n.dateCreated BETWEEN :date_start AND :date_end')
            ->setParameter('date_start', $parameters['date_start'])
            ->setParameter('date_end', $parameters['date_end'])
            ->andWhere('s.statusActive = :active')
            ->setParameter('active', $parameters['active'])
            ->orderBy('n.dateCreated', 'DESC')
        ;

        $statuses = array_filter($parameters['status'], function ($status) {
            return !empty($status) || '0' === $status;
        });

        if (!empty($parameters['status'])) {
            $qb
                ->andWhere('n.success IN (:statuses)')
                ->setParameter('statuses', $statuses)
            ;
        }

        if (!empty($parameters['size'])) {
            $qb
                ->andWhere(sprintf('n.backupsize %s :size', $parameters['comparer']))
                ->setParameter('size', $parameters['size'])
            ;
        }

        return $qb->getQuery()->getResult();
    }

    public function findByServerTotalBackups($date_start, $date_end)
    {
        $dql = 'SELECT COUNT(n) FROM NCbrtBundle:NcBackupEvents n'
            . ' JOIN n.srvrsServers s'
            . ' WHERE n.dateCreated BETWEEN :date_start AND :date_end'
            . " AND s.statusActive = '1'";

        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('date_start', $date_start->format('Y-m-d H:i:s'))
            ->setParameter('date_end', $date_end->format('Y-m-d H:i:s'));
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    // count all events by status (success, failed, no report, other warning)
    public function findByServerTotalStatus($date_start, $date_end, $status)
    {
        $dql = 'SELECT COUNT(n) FROM NCbrtBundle:NcBackupEvents n'
            . ' JOIN n.srvrsServers s'
            . ' WHERE (n.dateCreated BETWEEN :date_start AND :date_end)'
            . ' AND n.success = :status'
            . " AND s.statusActive = '1'";

        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('date_start', $date_start->format('Y-m-d H:i:s'))
            ->setParameter('date_end', $date_end->format('Y-m-d H:i:s'))
            ->setParameter('status', $status);
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    // count warnings not incliding no report received.
    public function findByOtherStatus($date_start, $date_end)
    {
        $dql = 'SELECT COUNT(n) FROM NCbrtBundle:NcBackupEvents n'
            . ' JOIN n.srvrsServers s'
            . ' WHERE (n.dateCreated BETWEEN :date_start AND :date_end)'
            . " AND n.success <> '0'"
            . " AND n.success <> '1'"
            . " AND n.success <> '3'"
            . " AND s.statusActive = '1'";
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('date_start', $date_start->format('Y-m-d H:i:s'))
            ->setParameter('date_end', $date_end->format('Y-m-d H:i:s'));
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    // find backup events by method of backing up used.
    public function findbyBackupMethod($date_start, $date_end, $method)
    {
        $dql = 'SELECT COUNT(n) FROM NCbrtBundle:NcBackupEvents n'
            . ' JOIN n.srvrsServers s'
            . ' WHERE n.dateCreated BETWEEN :date_start AND :date_end'
            . " AND s.statusActive = '1'"
            . ' AND n.backupmethod = :method';
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('date_start', $date_start->format('Y-m-d H:i:s'))
            ->setParameter('date_end', $date_end->format('Y-m-d H:i:s'))
            ->setParameter('method', $method);

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    // find backup events by method of backing up used.
    public function findbyBackupMethodNotStandard($date_start, $date_end)
    {
        $dql = 'SELECT COUNT(n) FROM NCbrtBundle:NcBackupEvents n'
            . ' JOIN n.srvrsServers s'
            . ' WHERE n.dateCreated BETWEEN :date_start AND :date_end'
            . " AND s.statusActive = '1'"
            . " AND n.backupmethod <> 'ncscript-py'"
            . " AND n.backupmethod <> 'ncscript'";
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('date_start', $date_start->format('Y-m-d H:i:s'))
            ->setParameter('date_end', $date_end->format('Y-m-d H:i:s'));

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    public function findServerByBackupReport()
    {
        $dql = 'SELECT s.name, s.id, MAX(n.dateCreated) latest, s.frequency
            FROM NCbrtBundle:NcBackupEvents n
            JOIN n.srvrsServers s
            WHERE s.statusActive = 1 GROUP BY s.name';
        $query = $this->getEntityManager()->createQuery($dql);
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
