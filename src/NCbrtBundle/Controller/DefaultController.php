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

class DefaultController extends Controller
{
    /**
     * @Route("/", name="search_home")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(SrvrsServersType::class);
        $form->handleRequest($request);
        $paramaters = array('backupmethod' => '');
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $paramaters['server_name'] = $data['name'];
            $paramaters['backupmethod'] = $data['method'];
            $paramaters['status'] = $data['status'];
            $paramaters['size'] = $data['size'];
            $aSizeConvertion = new SizeConvert();
            $paramaters['size'] = $aSizeConvertion->SizeConversionToKB($paramaters['size'] . ' MB');
            $paramaters['comparer'] = $data['comparer'];
            $paramaters['count'] = $data['count'];
            if ($data['active'] === true) {
                $paramaters['active'] = '1';
            } else {
                $paramaters['active'] = '0';
            }
            if ($paramaters['backupmethod'] == '0') {
                $paramaters['backupmethod'] = '';
            }
            for ($i=0; $i < count($paramaters['status']); $i++) { 
                if ($paramaters['status'][$i] == -1){
                    $paramaters['status'] = array();
                    $paramaters['status'][0] = '';
                }
            }
        }
        if (!isset($paramaters['server_name'])) {
            $paramaters['server_name'] = '';
        }
        if (!isset($paramaters['status'])) {
            $paramaters['status'][0] = '';
        }
        if (!isset($paramaters['size'])) {
            $paramaters['size'] = '0';
        }
        if (!isset($paramaters['comparer'])) {
            $paramaters['comparer'] = '';
        }
        if (!isset($paramaters['count'])) {
            $paramaters['count'] = 25;
        }
        if (!isset($paramaters['active'])) {
            $paramaters['active'] = '1';
        }
        $paramaters['count'] = intval($paramaters['count']);
        // This selects a collection of complete objects,
        // this is not good for very big queries as we do not need stuff like
        // the log at this point. The SOLUTION implicates to modify the
        // NcBackupEventsRepository.php for it to select only the wanted fields
        // on the DQL query. The change will also entail the change from Objects
        // to array in the following code.
        $em = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')
            ->findByServerBackup($paramaters);
   
        $table_results = array();
        foreach ($em as $value) {
            $aux = array();
            $aux['name'] = $value->getSrvrsServers()->getName();
            $aux['date_created'] = $value->getDateCreated(); //Convert to string like Old HR system.
            $aux['status'] = $value->getSuccess();
            $aux['size'] = $value->getBackupsize();
            $aux['status_active'] = $value->getSrvrsServers()->getStatusActive();
            $aSize = new SizeConvert();
            $aux['size'] = $aSize->SizeCovertionFromKB($aux['size']);
            $aux['method'] = $value->getBackupmethod();
            $aux['id_event'] = $value->getId();
            $aux['id_server'] = $value->getSrvrsServers()->getId();
            $aux['description'] = $value->getSrvrsServers()->getDescription();
            $aux['log'] = $value->getLog();
            $aux['error'] = $value->getError();
            $aux['type'] = $value->getBackupType();
            $table_results[] = $aux;
        }

        $paginator = $this->get('knp_paginator');
        $current_page = $request->query->getInt('page', 1);
        $pagination = $paginator->paginate(
            $table_results,
            $current_page,
            $paramaters['count']
        );

        $date_start = date_sub(new \DateTime(), date_interval_create_from_date_string('1 days'));
        $date_end = new \DateTime();
        $succeful = $this->getDoctrine()
            ->getRepository('NCbrtBundle:NcBackupEvents')
            ->findByServerTotalStatus($date_start, $date_end, '0');

        $failed = $this->getDoctrine()
            ->getRepository('NCbrtBundle:NcBackupEvents')
            ->findByServerTotalStatus($date_start, $date_end, '1');

        $warning = $this->getDoctrine()
            ->getRepository('NCbrtBundle:NcBackupEvents')
            ->findByServerTotalStatus($date_start, $date_end, '3');

        return $this->render('NCbrtBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'pagination' => $pagination,
            'current_page' => $current_page,
            'count' => $paramaters['count'],
            'paramaters' => $paramaters,
            'succeful' => $succeful,
            'failed' => $failed,
            'warning' => $warning,
        ));
    }

    /**
     * @Route("/backup")
     */
    public function insertAction(Request $request)
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
     */
    public function viewAction($event_id, Request $request)
    {
        $em = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')->find($event_id);
        $referer = $request->headers->get('referer');
        return $this->render('NCbrtBundle:Default:details.html.twig',
            array('event' => $em, 'referer' => $referer));
    }

    /**
     * @Route("/about", name="about_main")
     */
    public function aboutAction()
    {
        return $this->render('NCbrtBundle:About:about.html.twig');
    }

    /**
     * @Route("/exportExcel", name="export_excel")
     */
    public function exportExcelAction(Request $request)
    {
        $data = $request->query->get('paramaters');
        $paramaters['server_name'] = $data['server_name'];
        $paramaters['backupmethod'] = $data['backupmethod'];
        $paramaters['status'] = $data['status'];
        $paramaters['size'] = $data['size'];
        $paramaters['comparer'] = $data['comparer'];
        $paramaters['active'] = $data['active'];

        $em = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')
            ->findByServerBackup($paramaters);

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
     */
    public function exportpdfAction(Request $request)
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
