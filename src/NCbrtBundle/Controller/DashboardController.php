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
use NCbrtBundle\Form\Type\DateSearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use \Symfony\Component\HttpFoundation\Response;

use \Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
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
     * @Route("/report", name="stats_general")
     */
    public function showAction(Request $request)
    {
        $form = $this->createForm(DateSearchType::class);
        $totalBackups = '';
        $totalSuccessfulBackups = '';
        $totalFailedBackups = '';
        $totalNoReportedBackups = '';
        $totalOtherStatus = '';

        $totalBackupsNcBackupPy = '';
        $totalBackupsNcScript = '';
        $totalBackupsMethodOther = '';

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
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
            $totalOtherStatus = $this->getDoctrine()
                ->getRepository('NCbrtBundle:NcBackupEvents')
                ->findByOtherStatus($data['date_start'], $data['date_end']);

            $totalBackupsNcBackupPy = $this->getDoctrine()
                ->getRepository('NCbrtBundle:NcBackupEvents')
                ->findbyBackupMethod($data['date_start'], $data['date_end'], 'ncscript-py');

            $totalBackupsNcScript = $this->getDoctrine()
                ->getRepository('NCbrtBundle:NcBackupEvents')
                ->findbyBackupMethod($data['date_start'], $data['date_end'], 'ncscript');
            $totalBackupsMethodOther = $this->getDoctrine()
                ->getRepository('NCbrtBundle:NcBackupEvents')
                ->findbyBackupMethodNotStandard($data['date_start'], $data['date_end']);
            return $this->render('NCbrtBundle:Dashboard:dashboard.html.twig',
                array('form' => $form->createView(),
                    'total_backups' => $totalBackups,
                    'total_successful_backups' => $totalSuccessfulBackups,
                    'total_fail_backups' => $totalFailedBackups,
                    'total_no_report_backups' => $totalNoReportedBackups,
                    'total_other_status' => $totalOtherStatus,
                    'total_backups_nc_backup_py' => $totalBackupsNcBackupPy,
                    'total_backups_nc_script' => $totalBackupsNcScript,
                    'total_backups_method_other' => $totalBackupsMethodOther,
                ));
        }

        return $this->render('NCbrtBundle:Dashboard:dashboard.html.twig',
            array('form' => $form->createView(),
                'total_backups' => $totalBackups,
                'total_successful_backups' => $totalSuccessfulBackups,
                'total_fail_backups' => $totalFailedBackups,
                'total_no_report_backups' => $totalNoReportedBackups,
                'total_other_status' => $totalOtherStatus,
                'total_backups_nc_backup_py' => $totalBackupsNcBackupPy,
                'total_backups_nc_script' => $totalBackupsNcScript,
                'total_backups_method_other' => $totalBackupsMethodOther,
            ));
    }
}
