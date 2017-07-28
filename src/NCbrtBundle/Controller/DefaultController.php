<?php

namespace NCbrtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use \Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;

use NCbrtBundle\Entity\SrvrsServers;
use NCbrtBundle\Entity\NcBackupEvents;

use NCbrtBundle\Tools\Tools;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $selectAll = $em->getRepository('NCbrtBundle:SrvrsServers')
                ->createQueryBuilder('s')
                ->innerJoin('s.NcBackupEvents', 'n')
                ->where('s.statusActive = :statusActive')
                ->setParameter('statusActive', 0)
                ->setMaxResults(3);
        return $this->render('NCbrtBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/backup/")
     */
    public function insertAction(Request $request){

        /* Get data from post request */
        $content = $request->request->all();

        /* Check if server is already in DB */
        $em = $this->getDoctrine()->getManager();

        $selectAll = $em->getRepository('NCbrtBundle:SrvrsServers')
                ->createQueryBuilder('s')
                ->where('s.name = :server_name')
                ->setParameter('server_name', $content['srvname'])
                ->getQuery()
                ->getResult();
//        var_dump($selectAll);
//        exit(0);
        /* Add Server if not in DB */
        $serverEntity = new SrvrsServers();
        if (empty($selectAll)) {
            $serverEntity->setName($content['srvname']);
            $serverEntity->setStatusActive(0);
            $em->persist($serverEntity);
            $em->flush();
        } else {
            $serverEntity= Tools::array_to_object($selectAll[0]);
        }
        /* At this point the server is already on DB I should have the ID */
        
        /* Create NEW backup event */
        if (!empty((array($serverEntity)))){
            $backupEvent = new NcBackupEvents();
            $backupEvent->setSrvrsServers($serverEntity);
            $backupEvent->setBackupmethod($content['bckmethod']);
            $backupEvent->setBackupsize($content['size']);
            $backupEvent->setLog($content['log']);
            $backupEvent->setSuccess($content['result']);
            $backupEvent->setBackupType($content['destination']);
            $em->persist($backupEvent);
            $em->flush();
            
        } else {
            return new Response('NO Server selected after post');
        }

        
        /* Response with result 200 plus message*/
        return new Response('New Backup result added for server: ' . $serverEntity->getName());
    }
}
