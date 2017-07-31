<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

//namespace NCbrtBundle\Entity;
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
/**
 * Description of SrvrsServersRepository
 *
 * @author Abel Guzman Sanchez
 */
class NcBackupEventsRepository extends EntityRepository {
    public function findOneBysrvrsServers($serverId){
        $dql = 'SELECT s, n FROM NCbrtBundle:NcBackupEvents n'
                . 'JOIN n.srvrsServers c '
                . 'WHERE n.id LIKE :id';
        $query = $this->getDoctrine()
                ->getManager()
                ->createQuery($dql)
                ->setParameter('id', $server);
        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }        
    }
     public function findByName(){
         return $this->getEntityManager()->createQuery();
//                 'SELECT nc, srv nc.backupmethod FROM nc_backup_events as nc 
//                 JOIN srvrs_servers as srv ON (srv.id = nc.srvrs_servers_id);'
//                 );
     }
}
