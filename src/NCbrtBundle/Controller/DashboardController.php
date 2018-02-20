<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Controller;

/**
 * Description of DashboardController
 *
 * @author Abel GUzman
 */
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;


class DashboardController  extends Controller {
    /*
     * Input time peiod (start-end), default one day (Could be a drop down).
     * Show dashboard Information:
     * - Total servers
     * - Success
     * - failed
     * - Warning
     *  + Size warning
     *  + Other Log warinig
     * - No backup
     * 
     * Storage Report
     * - Total: Success, failed, warning, no report
     * - Local: Success, failed, warning, no report
     * - S3: Success, failed, warning, no report
     * - OSS: Success, failed, warning, no report
     * - Others: Success, failed, warning, no report
     */
    
     /**
     * @Route("/dashboard", name="stats_general")
     */
    public function showAction(){
        
    }
}
