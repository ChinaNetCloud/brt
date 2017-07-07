<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function numberAction($max)
    {
        $number = mt_rand(0, $max);
//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );
        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));        
    }
}

