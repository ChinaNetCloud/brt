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


use NCbrtBundle\Form\Type\DateSearchType;

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
    public function showAction(Request $request){
        $form = $this->createForm(DateSearchType::class);
        $totalBackups = '';
        $totalSuccessfulBackups = '';
        $totalFailedBackups = '';
        $totalNoReportedBackups = '';
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            $totalBackups = $this->getDoctrine()
                    ->getRepository('NCbrtBundle:NcBackupEvents')
                    ->findByServerTotalBackups($data['date_start'], $data['date_end']);
            
            $totalSuccessfulBackups = $this->getDoctrine()
                    ->getRepository('NCbrtBundle:NcBackupEvents')
                    ->findByServerTotalStatus($data['date_start'], $data['date_end'], '0');
            
            $totalFailedBackups = $this->getDoctrine()
                    ->getRepository('NCbrtBundle:NcBackupEvents')
                    ->findByServerTotalStatus($data['date_start'], $data['date_end'], '1');
            
            $totalNoReportedBackups = $this->getDoctrine()
                    ->getRepository('NCbrtBundle:NcBackupEvents')
                    ->findByServerTotalStatus($data['date_start'], $data['date_end'], '3');
            
            return $this->render('NCbrtBundle:Dashboard:dashboard.html.twig', 
                    array('form' => $form->createView(),
                        'total_backups' => $totalBackups,
                        'total_successful_backups' => $totalSuccessfulBackups,
                        'total_fail_backups' => $totalFailedBackups,
                        'total_no_report_backups' => $totalNoReportedBackups));
        }
        
        return $this->render('NCbrtBundle:Dashboard:dashboard.html.twig',
                    array('form' => $form->createView(),
                        'total_backups' => $totalBackups,
                        'total_successful_backups' => $totalSuccessfulBackups,
                        'total_fail_backups' => $totalFailedBackups,
                        'total_no_report_backups' => $totalNoReportedBackups));
    }
}
