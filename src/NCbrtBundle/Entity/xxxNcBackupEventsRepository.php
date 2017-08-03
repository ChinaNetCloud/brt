<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Repository;
          
use Doctrine\ORM\EntityRepository;
/**
 * Description of SrvrsServersRepository
 *
 * @author Abel Guzman Sanchez
 */
class NcBackupEventsRepository extends EntityRepository {
    /**
     *
     * @param type $parameters
     * @return type
     */
    public function findByServerBackup($parameters)
    {
        print_r($parameters);
        $dql = 'SELECT w FROM NCbrtBundle:NcBackupEvents n 
            WHERE p.backupmethod = :backupmethod';
        $query = $this->getEntityManager()
                ->createQuery($dql)
                ->setParameter('backupmethod', $parameters['backupmethod']);
        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    public function search($term)
    {
        return $this->createQueryBuilder('n')
                ->join('n.SrvrsServers', 's')
                ->addSelect('s');
    }

    public function findByName(){
        return $this->getEntityManager()->createQuery();
    }

}
