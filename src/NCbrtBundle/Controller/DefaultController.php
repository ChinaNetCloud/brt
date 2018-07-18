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
            if ($paramaters['status'] == '-1') {
                $paramaters['status'] = '';
            }
        }
        if (!isset($paramaters['server_name'])) {
            $paramaters['server_name'] = '';
        }
        if (!isset($paramaters['status'])) {
            $paramaters['status'] = '';
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
        $page_actual = $request->query->getInt('page', 1);
        $pagination = $paginator->paginate(
            $table_results,
            $page_actual,
            $paramaters['count']
        );

        return $this->render('NCbrtBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
            'pagination' => $pagination,
            'page_actual' => $page_actual,
            'count' => $paramaters['count'],
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
    public function exportarExcelAction(Request $request)
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
            if ($paramaters['status'] == '-1') {
                $paramaters['status'] = '';
            }
        }
        if (!isset($paramaters['server_name'])) {
            $paramaters['server_name'] = '';
        }
        if (!isset($paramaters['status'])) {
            $paramaters['status'] = '';
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

        // solicitamos el servicio 'phpexcel' y creamos el objeto vacío...
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject();

        // ...y le asignamos una serie de propiedades
        $phpExcelObject->getProperties()
            ->setCreator("ChinaNetCloud")
            ->setLastModifiedBy("ChinaNetCloud")
            ->setTitle("Servers Records")
            ->setSubject("List of records")
            ->setDescription("List of servers status")
            ->setKeywords("ChinaNetCloud backup");

        // establecemos como hoja activa la primera, y le asignamos un título
        $phpExcelObject->setActiveSheetIndex(0);
        $phpExcelObject->getActiveSheet()->setTitle('Servers Records');

        // escribimos en distintas celdas del documento el título de los campos que vamos a exportar
        $phpExcelObject->setActiveSheetIndex(0)
            ->setCellValue('B2', 'Server Name')
            ->setCellValue('C2', 'Date Created')
            ->setCellValue('D2', 'Execution Status')
            ->setCellValue('E2', 'Size')
            ->setCellValue('F2', 'Backup Method')
            ->setCellValue('G2', 'Production');

        // fijamos un ancho a las distintas columnas
        $phpExcelObject->setActiveSheetIndex(0)
            ->getColumnDimension('B')
            ->setWidth(30);
        $phpExcelObject->setActiveSheetIndex(0)
            ->getColumnDimension('C')
            ->setWidth(25);
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

        // recorremos los registros obtenidos de la consulta a base de datos escribiéndolos en las celdas correspondientes
        $row = 3;
        foreach ($em as $item) {
            $phpExcelObject->setActiveSheetIndex(0)
                ->setCellValue('B' . $row, $item->getSrvrsServers()->getName())
                ->setCellValue('C' . $row, $item->getDateCreated())
                ->setCellValue('D' . $row, $item->getSuccess())
                ->setCellValue('E' . $row, $item->getBackupsize())
                ->setCellValue('F' . $row, $item->getBackupmethod())
                ->setCellValue('G' . $row, $item->getSrvrsServers()->getStatusActive());
            $row++;
        }

        // se crea el writer
        $writer = $this->get('phpexcel')->createWriter($phpExcelObject, 'Excel5');
        // se crea el response
        $response = $this->get('phpexcel')->createStreamedResponse($writer);
        // y por último se añaden las cabeceras
        $dispositionHeader = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            'ListRecords.xls'
        );
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->headers->set('Content-Disposition', $dispositionHeader);

        return $response;
    }

    /**
     * @Route("/pdf/{id}", name="custompdf")
     */
    public function pdfAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getRepository('NCbrtBundle:NcBackupEvents')->find($id);
        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->render('NCbrtBundle:PDF:export.html.twig', [
            'event' => $em,
        ]);
        $filename = 'LogStatus-'. $em->getsrvrsServers()->getName().'-'. $em->getId();
        return new Response(
            $snappy->getOutputFromHtml($html), 200, array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $filename . '.pdf"',
            )
        );
    }
}
