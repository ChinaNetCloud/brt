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
        dump($em); die;
        $length = count($em);
        echo 'size: ' . $length . '<br>';
        for($i=0; $i < $length; $i++){
            $format = 'Y-m-d H:i:s';
            $latest = date_create_from_format($format, $em[$i]['latest']);
            $date = date_create_from_format($format, date($format));
            $TimeDifferenceAux = abs($date->getTimestamp() - $latest->getTimestamp());
            echo $TimeDifferenceAux . ' <-> ' . $em[$i]['frequency'];
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
                
//                $server->setName($em[$i]['name']);
//                $server->setId($em[$i]['id']);
                
                $event->setSrvrsServers($server);
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($event);
//                $em->persist($server);                

                $em->flush();
                return new Response('Saved new event with id '.$event->getId());
            } else {
                echo 'No need to report<br>';                
            }
        }
        exit();
    }
    private function httpPost($url, $data)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
     /**
     * @Route("/serverschedule", name="server_schedule")
     */
    public function eventsServer($aServerName = 'srv-nc-test1'){
        $em = $this->getDoctrine()
                ->getRepository('NCbrtBundle:NcBackupEvents')
                ->findServerEventsScheduleByName($aServerName);
        $length = count($em);
        $i = 0;
        $TimeDifferenceAux = array();
        echo 'size: ' . $length . '<br>';
        for($i; $i < $length; $i++){
            if ($i < $length - 1){
                // 1- Convert DateInterval Object to seconds and use as float/double value (function class in Tools?)
                $TimeDifferenceAux[] = abs($em[$i]['dateCreated']->getTimestamp() - $em[$i+1]['dateCreated']->getTimestamp());
                
            }
        }
        
//        $TimeDifferenceAux);
//        exit(0); 
        // 2- Calculate average (median) and standard deviation.
        // 3- Calculate timeToWait = (median + standard deviation + error time proportional to the backup size).
        // 4- Execute every 30 minutes to know about if timeToWaithas passed and send a warning report about it(Once or twice a day or skip it f already sent,etc?).
       
    }
    
}
