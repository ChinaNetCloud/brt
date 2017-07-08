<?php

namespace NCbrtBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        /*Select everything that is younger than a week by default, 
         * clearly say the time and give options to change filter .
         */
        
        return $this->render('NCbrtBundle:Default:index.html.twig');
    }
}
