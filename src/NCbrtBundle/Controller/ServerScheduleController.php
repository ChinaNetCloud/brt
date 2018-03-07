<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


use NCbrtBundle\Entity\NcBackupEvents;
use NCbrtBundle\Entity\SrvrsServers;
use NCbrtBundle\Tools\TimeConverter;
/**
 * Description of ServerSchedule
 *
 * @author cncuser
 */
class ServerScheduleController extends Controller {
    /**
     * @Route("/checkreport", name="backup_schedule")
     */    
    public function checkLastReportAction(){
        $em = $this->getDoctrine()
                ->getRepository('NCbrtBundle:NcBackupEvents')
                ->findServerByBackupReport();
        $length = count($em);
        $TimeDifferenceAux = array();
        echo 'size: ' . $length . '<br>';
        for($i=0; $i <= $length-1; $i++){
            echo $i . '<br>';
            $format = 'Y-m-d H:i:s';
            $latest_date_str = $em[$i];
            $latest = date_create_from_format($format, $latest_date_str['latest']);
            $date = date_create_from_format($format, date($format));
            $TimeDifferenceAux = abs($date->getTimestamp() - $latest->getTimestamp());
            echo $TimeDifferenceAux . ' <-> ' . $em[$i]['frequency'] . '<br>';
            if ($TimeDifferenceAux > $em[$i]['frequency'] && 
                    $em[$i]['frequency'] > 0 &&
                    $em[$i]['frequency'] != ''){
                echo 'Report ' . $em[$i]['name'] . '<br>';

                $event = new NcBackupEvents();
                
                $event->setBackupmethod('BRT: No report');
                $event->setBackupsize('0');
                $event->setDateCreated(date_create_from_format($format,date($format)));
                $event->setLog('No Report');
                $event->setSuccess('3');
                
                // Create the LOG
                $log = 'This server has a backup frecuancy of ' . TimeConverter::ConvertFromSeconds($em[$i]['frequency']) . '. ';
                $log .= 'The last backup event was on: ' . $em[$i]['latest'] . '. ';
                $log .= 'The time elapsed without backup is of about ' . TimeConverter::ConvertFromSeconds($TimeDifferenceAux) . '.';
                $event->setLog($log);
                
                $server = $this->getDoctrine()
                        ->getRepository('NCbrtBundle:SrvrsServers')
                        ->find($em[$i]['id']);
                
                $event->setSrvrsServers($server);
                $em = $this->getDoctrine()->getManager();
                $em->persist($event);

                $em->flush();
                echo 'Saved new event with id ' . $event->getId() . '<br>';
            } else {
                echo 'No need to report<br>';                
            }
        }
        return new Response('Done.');
    }
}
