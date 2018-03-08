<?php

namespace NCbrtBundle\Entity;

/**
 * NcBackupEventsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NcBackupEventsRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByServerBackup($parameters)
    {
        $dql = 'SELECT n FROM NCbrtBundle:NcBackupEvents n
            JOIN n.srvrsServers s
            WHERE n.backupmethod LIKE :backupmethod 
            AND s.name LIKE :server_name 
            AND s.statusActive = :active';
        //If looking for warnings, should also include sucessfull backups with zero size.
        if ($parameters['status'] == 3 ){
            $dql .= " AND (n.success = '0' AND n.backupsize = 0)"
                    . " OR n.success LIKE :status"
                    . " OR (n.success != '0' AND n.success != '1')";
        } else {
            $dql .= ' AND n.success LIKE :status';
        }
        
        if (isset($parameters['size']) && $parameters['size'] != null && 
                $parameters['size'] != '' && $parameters['size'] <> 0){
            if ($parameters['size'] >= 0){
                $dql .= ' AND n.backupsize ' . $parameters['comparer'] . ' :size';
                $dql .= ' ORDER BY n.dateCreated DESC';
            }
        } else {
            $dql .= ' ORDER BY n.dateCreated DESC';
        }

        $query = $this->getEntityManager()->createQuery($dql);
        if (isset($parameters['size']) && $parameters['size'] != null && 
                $parameters['size'] != '' && $parameters['size'] <> 0){
            if ($parameters['size'] >= 0){
            
            $query ->setMaxResults($parameters['count'])
                    ->setParameter('backupmethod',
                        '%' . $parameters['backupmethod'] . '%')
                    ->setParameter('server_name',
                        '%' . $parameters['server_name'] . '%')
                    ->setParameter('status',
                        '%' . $parameters['status'] . '%')
                    ->setParameter('size', $parameters['size'])
                    ->setParameter('active', $parameters['active']);
            }
        } else {
            $query ->setMaxResults($parameters['count'])
                    ->setParameter('backupmethod',
                        '%' . $parameters['backupmethod'] . '%')
                    ->setParameter('server_name',
                        '%' . $parameters['server_name'] . '%')
                    ->setParameter('status',
                        '%' . $parameters['status'] . '%')
                    ->setParameter('active', $parameters['active']);
        }
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    public function findByServerTotalBackups($date_start, $date_end){
        $dql = 'SELECT COUNT(n) FROM NCbrtBundle:NcBackupEvents n'
                . ' JOIN n.srvrsServers s'                
                . ' WHERE n.dateCreated BETWEEN :date_start AND :date_end'
                . " AND s.statusActive = '1'";
        
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('date_start', $date_start->format('Y-m-d h:i:s'))
                ->setParameter('date_end', $date_end->format('Y-m-d h:i:s'));
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    // count all events by status (success, failed, no report, other warning)
    public function findByServerTotalStatus($date_start, $date_end, $status){
        $dql = 'SELECT COUNT(n) FROM NCbrtBundle:NcBackupEvents n'
                . ' JOIN n.srvrsServers s'                
                . ' WHERE (n.dateCreated BETWEEN :date_start AND :date_end)'
                . ' AND n.success = :status'
                . " AND s.statusActive = '1'";
        
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('date_start', $date_start->format('Y-m-d h:i:s'))
                ->setParameter('date_end', $date_end->format('Y-m-d h:i:s'))
                ->setParameter('status', $status);
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    // count warnings not incliding no report received. 
    public function findByOtherStatus($date_start, $date_end){
        $dql = 'SELECT COUNT(n) FROM NCbrtBundle:NcBackupEvents n'
                . ' JOIN n.srvrsServers s'                
                . ' WHERE (n.dateCreated BETWEEN :date_start AND :date_end)'
                . " AND n.success <> '0'"
                . " AND n.success <> '1'"
                . " AND n.success <> '3'"
                . " AND s.statusActive = '1'";
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('date_start', $date_start->format('Y-m-d h:i:s'))
                ->setParameter('date_end', $date_end->format('Y-m-d h:i:s'));
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }       
    }
    // find backup events by method of backing up used.
    public function findbyBackupMethod($date_start, $date_end, $method){
        $dql = 'SELECT COUNT(n) FROM NCbrtBundle:NcBackupEvents n'
                . ' JOIN n.srvrsServers s'                
                . ' WHERE n.dateCreated BETWEEN :date_start AND :date_end'
                . " AND s.statusActive = '1'"
                . ' AND n.backupmethod = :method';        
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('date_start', $date_start->format('Y-m-d h:i:s'))
                ->setParameter('date_end', $date_end->format('Y-m-d h:i:s'))
                ->setParameter('method', $method);
        
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }        
    }
    // find backup events by method of backing up used.
    public function findbyBackupMethodNotStandard($date_start, $date_end){
        $dql = 'SELECT COUNT(n) FROM NCbrtBundle:NcBackupEvents n'
                . ' JOIN n.srvrsServers s'                
                . ' WHERE n.dateCreated BETWEEN :date_start AND :date_end'
                . " AND s.statusActive = '1'"
                . " AND n.backupmethod <> 'ncscript-py'"
                . " AND n.backupmethod <> 'ncscript'";
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('date_start', $date_start->format('Y-m-d h:i:s'))
                ->setParameter('date_end', $date_end->format('Y-m-d h:i:s'));
        
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }        
    }

        public function findServerByBackupReport(){
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
