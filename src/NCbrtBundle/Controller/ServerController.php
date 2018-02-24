<?php

/*
 * Autho: Abel Guzman Sanchez
 * 2017
 * Apache license 2.0
 */

namespace NCbrtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\Response;


use NCbrtBundle\Entity\SrvrsServers;
use NCbrtBundle\Form\Type\ServerType;
/**
 * Description of ServerController
 *
 * @author cncuser
 */
class ServerController extends Controller 
{
    /**
     * @Route("/server/{id}", name="edit_server")
     */
    public function editAction (Request $request, $id){
        
        $em = $this->getDoctrine()->getManager();
        $server = $em->getRepository('NCbrtBundle:SrvrsServers')
                ->find($id);
        if (!$server) {
            throw $this->createNotFoundException('Server not found for ID:  '. $id);
        }
        $form = $this->createForm(ServerType::class, $server);
        
        if ($request->getMethod() == 'POST'){
            $form->handleRequest($request);
            $em->flush();
            return $this->render('NCbrtBundle:Server:server.html.twig', array(
                'form' => $form->createView(),
                'server' => $server,
            ));
        }
        return $this->render('NCbrtBundle:Server:server.html.twig', array(
            'form' => $form->createView(),
            'server' => $server,
        ));
    }
}
