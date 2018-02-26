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
            AND n.success LIKE :status 
            AND s.statusActive = :active';

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
    public function countByServerStats($date_start, $date_end){
        
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
