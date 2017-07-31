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
class SrvrsServersRepository extends EntityRepository {
     public function findAll() {
         parent::findAll();
     }
     public function findByName($serverName){
         return $this->getEntityManager()->createQuery();
//                 'SELECT nc, srv nc.backupmethod FROM nc_backup_events as nc 
//                 JOIN srvrs_servers as srv ON (srv.id = nc.srvrs_servers_id);'
//                 );
     }
}
