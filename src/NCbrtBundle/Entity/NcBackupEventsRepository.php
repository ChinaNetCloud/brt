<?php

namespace NCbrtBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NonUniqueResultException;

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
            ->orderBy('n.dateCreated', 'DESC');
        $statuses = array_filter($parameters['status'], function ($status) {
            return !empty($status) || '0' === $status;
        });
        if (!empty($parameters['status'])) {
            $qb
                ->andWhere('n.success IN (:statuses)')
                ->setParameter('statuses', $statuses);
        }
        if (!empty($parameters['size'])) {
            $qb
                ->andWhere(sprintf('n.backupsize %s :size', $parameters['comparer']))
                ->setParameter('size', $parameters['size']);
        }
        return $qb->getQuery();
    }

    public function findByServerTotalBackups($date_start, $date_end)
    {
        $qb = $this->createQueryBuilder('n')
            ->join('n.srvrsServers', 's')
            ->select('count(n)')
            ->where('n.dateCreated BETWEEN :date_start AND :date_end')
            ->setParameter('date_start', $date_start)
            ->setParameter('date_end', $date_end)
            ->andWhere('s.statusActive = 1');
        try {
            return $qb->getQuery()->getSingleScalarResult();
        } catch (NonUniqueResultException $e) {
            return null;
        }
    }

    public function lastSuccess()
    {
        $qb = $this->createQueryBuilder('n')
            ->join('n.srvrsServers', 's')
            ->addSelect('n.dateCreated latest', 's.name', 's.id')
            ->andWhere('n.success = 0')
            ->andWhere('s.statusActive = 1')
            ->groupBy('s.name');
        return $qb->getQuery()->getResult();
    }

    // count all events by status (success, failed, no report, other warning)
    public function findByServerTotalStatus($date_start, $date_end, $status)
    {
        $qb = $this->createQueryBuilder('n')
            ->join('n.srvrsServers', 's')
            ->select('count(n)')
            ->where('n.dateCreated BETWEEN :date_start AND :date_end')
            ->setParameter('date_start', $date_start)
            ->setParameter('date_end', $date_end)
            ->andWhere('n.success = :status')
            ->setparameter('status', $status)
            ->andWhere('s.statusActive = 1');
        try {
            return $qb->getQuery()->getSingleScalarResult();
        } catch (NonUniqueResultException $e) {
            return null;
        }
    }

    // count warnings not including no report received.
    public function findByOtherStatus($date_start, $date_end)
    {
        $qb = $this->createQueryBuilder('n')
            ->join('n.srvrsServers', 's')
            ->select('count(n)')
            ->where('n.dateCreated BETWEEN :date_start AND :date_end')
            ->setParameter('date_start', $date_start)
            ->setParameter('date_end', $date_end)
            ->andWhere('n.success <> 0')
            ->andWhere('n.success <> 1')
            ->andWhere('n.success <> 3')
            ->andWhere('s.statusActive = 1');
        try {
            return $qb->getQuery()->getSingleScalarResult();
        } catch (NonUniqueResultException $e) {
            return null;
        }
    }

    // find backup events by method of backing up used.
    public function findbyBackupMethod($date_start, $date_end, $method)
    {
        $qb = $this->createQueryBuilder('n')
            ->join('n.srvrsServers', 's')
            ->select('count(n)')
            ->where('n.dateCreated BETWEEN :date_start AND :date_end')
            ->setParameter('date_start', $date_start)
            ->setParameter('date_end', $date_end)
            ->andWhere('n.backupmethod = :method')
            ->setparameter('method', $method)
            ->andWhere('s.statusActive = 1');
        try {
            return $qb->getQuery()->getSingleScalarResult();
        } catch (NonUniqueResultException $e) {
            return null;
        }
    }

    // find backup events by method of backing up used.
    public function findbyBackupMethodNotStandard($date_start, $date_end)
    {
        $qb = $this->createQueryBuilder('n')
            ->join('n.srvrsServers', 's')
            ->select('count(n)')
            ->where('n.dateCreated BETWEEN :date_start AND :date_end')
            ->setParameter('date_start', $date_start)
            ->setParameter('date_end', $date_end)
            ->andWhere("n.backupmethod <> 'ncscript-py'")
            ->andWhere("n.backupmethod <> 'ncscript'")
            ->andWhere('s.statusActive = 1');
        try {
            return $qb->getQuery()->getSingleScalarResult();
        } catch (NonUniqueResultException $e) {
            return null;
        }
    }

    public function findServerByBackupReport()
    {
        $qb = $this->createQueryBuilder('n')
            ->join('n.srvrsServers', 's')
            ->addSelect('s.name', 's.id', 'max(n.dateCreated) latest', 's.frequency')
            ->where('s.statusActive = 1')
            ->groupBy('s.name');
        return $qb->getQuery()->getResult();
    }
}
