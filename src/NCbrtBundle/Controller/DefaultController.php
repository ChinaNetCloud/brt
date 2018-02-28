<?php
namespace NCbrtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;

use NCbrtBundle\Entity\SrvrsServers;
use NCbrtBundle\Entity\NcBackupEvents;

use NCbrtBundle\Tools\Tools;

use NCbrtBundle\Form\Type\SrvrsServersType;
use NCbrtBundle\Tools\SizeConvert;

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
        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $paramaters['server_name'] = $data['name'];
            $paramaters['backupmethod'] = $data['method'];
            $paramaters['status'] = $data['status'];
            $paramaters['size'] = $data['size'];
            $aSizeConvertion = new SizeConvert();
            $paramaters['size'] = $aSizeConvertion->SizeConversionToKB($paramaters['size'].' MB');
            $paramaters['comparer'] = $data['comparer'];
            $paramaters['count'] = $data['count'];
            if ($data['active'] === true){
                $paramaters['active'] = '1';
            } else {
                $paramaters['active'] = '0';
            }
            if ($paramaters['backupmethod'] == '0'){
                $paramaters['backupmethod'] = '';
            }
            if ($paramaters['status'] == '-1'){
                $paramaters['status'] = '';
            }
        }
        if (!isset($paramaters['server_name'])){
            $paramaters['server_name'] = '';
        }
        if (!isset($paramaters['status'])){
            $paramaters['status'] = '';
        }
//        var_dump($paramaters['size']);
        if (!isset($paramaters['size'])){
            $paramaters['size'] = '';
        }
        if (!isset($paramaters['comparer'])){
            $paramaters['comparer'] = '';
        }
        if (!isset($paramaters['count'])){
            $paramaters['count'] = 25;
        }
        if (!isset($paramaters['active'])){
            $paramaters['active'] = '1';
        }
        $paramaters['count'] = intval($paramaters['count']);
        // This selects a collection of complete objects, 
        // this is not good for very big queries as we do not need stuff like 
        // the log at this point. The SOLUTION implicates to modify the 
        // NcBackupEventsRepository.php for it to select only the wanted fields 
        // on the DQL query. The change will also entail the change from Objects 
        // to array in the following code.
        $em = $this->getDoctrine()
                ->getRepository('NCbrtBundle:NcBackupEvents')
                ->findByServerBackup($paramaters);
//                ->findBy($paramater);
//                ->getResult();

        $table_results = array();
        foreach($em as $value){
            $aux = array();
            $aux['name'] =  $value->getSrvrsServers()->getName();
            $aux['date_created'] =  $value->getDateCreated(); //Convert to string like Old HR system.
            $aux['status'] =  $value->getSuccess();
            $aux['size'] =  $value->getBackupsize();
            $aux['status_active'] = $value->getSrvrsServers()->getStatusActive();

            /* Filter Size */
            $aSize = new SizeConvert();
            $aux['size'] = $aSize->SizeCovertionFromKB($aux['size']);
            $aux['method'] =  $value->getBackupmethod();
            /*
             *  These fields are also available, they will be usefull in show
             *  details, but not here. Need to think about that. 
             */
            $aux['id_event'] = $value->getId();
            $aux['id_server'] = $value->getSrvrsServers()->getId();
            $aux['description'] = $value->getSrvrsServers()->getDescription();
            $aux['log'] = $value->getLog();
            $aux['error'] = $value->getError();
            $aux['type'] = $value->getBackupType();
            $table_results [] = $aux;
        }
        
        return $this->render('NCbrtBundle:Default:index.html.twig', 
                array('form' => $form->createView(),
                    'table' => $table_results));
    }

    /**
     * @Route("/backup")
     */
    public function insertAction(Request $request){

        /* Get data from post request */
        $content = $request->request->all();
        var_dump($content);
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
//        var_dump($serverEntity);
//        die;
        if (empty($selectAll)) {
            $serverEntity->setName($content['srvname']);
            $serverEntity->setStatusActive(0);
            $em->persist($serverEntity);
            $em->flush();
        } else {
            $serverEntity= Tools::array_to_object($selectAll[0]);
        }
        /* At this point the server is already on DB I should have the ID */

        print_r($content);

        /* Create NEW backup event */
        if (!empty((array($serverEntity)))){
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
                . $serverEntity->getName(). '. This backup ID is: '
                . $backupEvent->getId() . '.');
    }
    /**
     * @Route("/event/{event_id}/", name="event_by_id")
     */
    public function viewAction($event_id){
        $em = $this->getDoctrine()
                ->getRepository('NCbrtBundle:NcBackupEvents')
                ->find($event_id);
        return $this->render('NCbrtBundle:Default:details.html.twig', 
                array('event' => $em));
    }
    /**
     * @Route("/about", name="about_main")     
     */
    public function aboutAction(){
        return $this->render('NCbrtBundle:About:about.html.twig');
    }
}
