<?php

namespace NCbrtBundle\Controller;

use NCbrtBundle\Entity\NcBackupEvents;
use NCbrtBundle\Entity\SrvrsServers;
use NCbrtBundle\Form\Type\SrvrsServersType;
use NCbrtBundle\Tools\SizeConvert;
use NCbrtBundle\Tools\Tools;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use NCbrtBundle\Tools\TimeConverter;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="search_home")
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(SrvrsServersType::class);
        $form->handleRequest($request);
        $parameters = array('backupmethod' => '');
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $parameters['server_name'] = $data['name'];
            $parameters['backupmethod'] = $data['method'];
            $parameters['status'] = $data['status'];
            $parameters['size'] = $data['size'];
            $aSizeConvertion = new SizeConvert();
            $parameters['size'] = $aSizeConvertion->SizeConversionToKB($parameters['size'] . ' MB');
            $parameters['comparer'] = $data['comparer'];
            $parameters['count'] = $data['count'];
            $parameters['date_start'] = $data['date_start'];
            $parameters['date_end'] = $data['date_end'];
            if ($data['active'] === true) {
                $parameters['active'] = '1';
            } else {
                $parameters['active'] = '0';
            }
            if ($parameters['backupmethod'] == '0') {
                $parameters['backupmethod'] = '';
            }
            for ($i = 0; $i < count($parameters['status']); $i++) {
                if ($parameters['status'][$i] == -1) {
                    $parameters['status'] = array();
                }
            }
        }
        if (!isset($parameters['server_name'])) {
            $parameters['server_name'] = '';
        }
        if (!isset($parameters['status'])) {
            $parameters['status'] = array();
        }
        if (!isset($parameters['size'])) {
            $parameters['size'] = '0';
        }
        if (!isset($parameters['comparer'])) {
            $parameters['comparer'] = '';
        }
        if (!isset($parameters['count'])) {
            $parameters['count'] = 25;
        }
        if (!isset($parameters['active'])) {
            $parameters['active'] = '1';
        }
        if (!isset($parameters['date_start'])) {
            $parameters['date_start'] = date_sub(new \DateTime(), date_interval_create_from_date_string('30 days'));
        }
        if (!isset($parameters['date_end'])) {
            $parameters['date_end'] = new \DateTime();
        }
        $parameters['count'] = intval($parameters['count']);
        // This selects a collection of complete objects,
        // this is not good for very big queries as we do not need stuff like
        // the log at this point. The SOLUTION implicates to modify the
        // NcBackupEventsRepository.php for it to select only the wanted fields
        // on the DQL query. The change will also entail the change from Objects
        // to array in the following code.
        $em = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')
            ->findByServerBackup($parameters);

        $paginator = $this->get('knp_paginator');
        $current_page = $request->query->getInt('page', 1);
        $pagination = $paginator->paginate(
            $em,
            $current_page,
            $parameters['count']
        );

        $date_start = date_sub(new \DateTime(), date_interval_create_from_date_string('1 days'));
        $date_end = new \DateTime();
        $success = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')->findByServerTotalStatus($date_start, $date_end, '0');
        $failed = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')->findByServerTotalStatus($date_start, $date_end, '1');
        $warning = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')->findByServerTotalStatus($date_start, $date_end, '3');
        $query = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')->lastSuccess();

        $result = array();
        for ($i = 0; $i < count($query); $i++) {
            $format = 'Y-m-d H:i:s';
            $latest = date_create_from_format($format, $query[$i]['latest']->format($format));
            $date = date_create_from_format($format, date($format));
            $TimeDifferenceAux = abs($date->getTimestamp() - $latest->getTimestamp());
            $result[$i]['id'] = $query[$i]['id'];
            $result[$i]['difference'] = TimeConverter::ConvertFromSeconds($TimeDifferenceAux);
        }

        return $this->render('NCbrtBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'pagination' => $pagination,
            'current_page' => $current_page,
            'count' => $parameters['count'],
            'parameters' => $parameters,
            'success' => $success,
            'failed' => $failed,
            'warning' => $warning,
            'result' => $result,
        ));
    }

    /**
     * @Route("/backup")
     * @param Request $request
     * @return Response
     */
    public
    function insertAction(Request $request)
    {

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

        /* Add Server if not in DB */
        $serverEntity = new SrvrsServers();

        if (empty($selectAll)) {
            $serverEntity->setName($content['srvname']);
            $serverEntity->setStatusActive(0);
            $em->persist($serverEntity);
            $em->flush();
        } else {
            $serverEntity = Tools::array_to_object($selectAll[0]);
        }
        /* At this point the server is already on DB I should have the ID */

        print_r($content);

        /* Create NEW backup event */
        if (!empty((array($serverEntity)))) {
            $backupEvent = new NcBackupEvents();
            $backupEvent->setSrvrsServers($serverEntity);
            $backupEvent->setSuccess($content['result']);
            $backupEvent->setBackupmethod($content['bckmethod']);

            /* Filter size and sanitize it */
            $aSizeConvertion = new SizeConvert();
            $content['size'] = $aSizeConvertion->SizeConversionToKB($content['size']);

            $backupEvent->setBackupsize($content['size']);
            $backupEvent->setLog($content['log']);
            $backupEvent->setError($content['error']);
            $date = date_create(date('Y-m-d H:i:s'));
            $backupEvent->setDateCreated($date);
            $backupEvent->setSuccess($content['result']);
            $backupEvent->setBackupType($content['destination']);
            $em->persist($backupEvent);
            $em->flush();

        } else {
            return new Response('NO Server selected after post');
        }

        /* Response with result 200 plus message*/
        return new Response('New Backup result added for server: '
            . $serverEntity->getName() . '. This backup ID is: '
            . $backupEvent->getId() . '.');
    }

    /**
     * @Route("/event/{event_id}/", name="event_by_id")
     * @param $event_id
     * @param Request $request
     * @return Response
     */
    public
    function viewAction($event_id, Request $request)
    {
        $em = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')->find($event_id);
        $referer = $request->headers->get('referer');
        return $this->render('NCbrtBundle:Default:details.html.twig',
            array('event' => $em, 'referer' => $referer));
    }

    /**
     * @Route("/about", name="about_main")
     */
    public
    function aboutAction()
    {
        return $this->render('NCbrtBundle:About:about.html.twig');
    }

    /**
     * @Route("/exportExcel", name="export_excel")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     * @throws \PHPExcel_Exception
     */
    public
    function exportExcelAction(Request $request)
    {
        $data = $request->query->get('paramaters');
        $parameters['server_name'] = $data['server_name'];
        $parameters['backupmethod'] = $data['backupmethod'];
        if (!empty($data['status'])) {
            $parameters['status'] = $data['status'];
        } else {
            $parameters['status'] = array();
        }
        $parameters['size'] = $data['size'];
        $parameters['comparer'] = $data['comparer'];
        $parameters['active'] = $data['active'];
        $parameters['date_start'] = $data['date_start']['date'];
        $parameters['date_end'] = $data['date_end']['date'];

        $em = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')
            ->findByServerBackup($parameters)->getResult();

        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

        $phpExcelObject->getProperties()
            ->setCreator("YunChang")
            ->setLastModifiedBy("YunChang")
            ->setTitle("Servers Records")
            ->setSubject("List of records")
            ->setDescription("List of servers status")
            ->setKeywords("YunChang backup");

        $phpExcelObject->setActiveSheetIndex(0);
        $phpExcelObject->getActiveSheet()->setTitle('Servers Records');

        $phpExcelObject->setActiveSheetIndex(0)
            ->setCellValue('B2', '#')
            ->setCellValue('C2', 'Server Name')
            ->setCellValue('D2', 'Date Created')
            ->setCellValue('E2', 'Execution Status')
            ->setCellValue('F2', 'Size')
            ->setCellValue('G2', 'Backup Method')
            ->setCellValue('H2', 'Production');

        $phpExcelObject->getActiveSheet()->getStyle('B2:H2')->getFont()->setBold(true);
        $phpExcelObject->getActiveSheet()->getStyle('B2:H2')->getFont()->setSize(13);

        $phpExcelObject->setActiveSheetIndex(0)
            ->getColumnDimension('B')
            ->setWidth(5);
        $phpExcelObject->setActiveSheetIndex(0)
            ->getColumnDimension('C')
            ->setWidth(30);
        $phpExcelObject->setActiveSheetIndex(0)
            ->getColumnDimension('D')
            ->setWidth(20);
        $phpExcelObject->setActiveSheetIndex(0)
            ->getColumnDimension('E')
            ->setWidth(20);
        $phpExcelObject->setActiveSheetIndex(0)
            ->getColumnDimension('F')
            ->setWidth(20);
        $phpExcelObject->setActiveSheetIndex(0)
            ->getColumnDimension('G')
            ->setWidth(20);
        $phpExcelObject->setActiveSheetIndex(0)
            ->getColumnDimension('H')
            ->setWidth(20);

        $row = 3;
        $num = 0;
        foreach ($em as $item) {
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('B' . $row, $num = $row - 2);
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('C' . $row, $item->getSrvrsServers()->getName());
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('D' . $row, $item->getDateCreated());
            if ($item->getSuccess() == 0) {
                $result = 'Success';
            } elseif ($item->getSuccess() == 1) {
                $result = 'Failed';
            } else {
                $result = 'Warning';
            }
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('E' . $row, $result);
            $size = $item->getBackupsize();
            $aSize = new SizeConvert();
            $size = $aSize->SizeCovertionFromKB($size);
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('F' . $row, $size);
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('G' . $row, $item->getBackupmethod());
            if ($item->getSrvrsServers()->getStatusActive() == 1) {
                $active = 'Active';
            } else {
                $active = 'Not Active';
            }
            $phpExcelObject->setActiveSheetIndex(0)->setCellValue('H' . $row, $active);
            $row++;
        }

        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'ListRecords.xls');

        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }

    /**
     * @Route("/exportPDF", name="exportpdf")
     * @param Request $request
     * @return Response
     */
    public
    function exportpdfAction(Request $request)
    {
        $id = $request->query->get('id');
        $em = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')->find($id);
        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->render('NCbrtBundle:PDF:export.html.twig', [
            'event' => $em,
        ]);
        $filename = 'LogStatus-' . $em->getsrvrsServers()->getName() . '-' . $em->getId();
        return new Response(
            $snappy->getOutputFromHtml($html), 200, array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"',
            )
        );
    }
}
