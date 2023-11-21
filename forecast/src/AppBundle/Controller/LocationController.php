<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LocationController extends Controller
{
    public function indexAction(){
        $this->addFlash('location', 'tu localizacion es e Valladolid, España');
        return $this->render('location/index.html.twig');
    }

    public function indexJsonAction(){
        $response = new Response (json_encode(array('location' => 'Tu localidad en Oviedo, España')));
        $response->headers->set('Content-type','application/json');
        return $response;

    }
    

}
