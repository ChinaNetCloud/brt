<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * Description of ServerSchedule
 *
 * @author cncuser
 */
class ServerScheduleController extends Controller {
     /**
     * @Route("/serverschedule", name="server_schedule")
     */
    public function eventsServer($aServerName = 'srv-nc-test1'){
        $em = $this->getDoctrine()
                ->getRepository('NCbrtBundle:NcBackupEvents')
                ->findServerEventsScheduleByName($aServerName);
        $length = count($em);
        $i = 0;
//        $TimeDifferenceAux = new \Symfony\Component\Form\Extension\Core\DataTransformer\DateInt
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
