<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ForwardController extends Controller
{
    public function indexAction(){
        $response = $this->forward("AppBundle:Forward:finish" , array("test"=> true));
        return $response;
    }
    public function finishAction($test){
        if($test) {
            return new Response("Redirecion realizada recibiendo el parametro satisfactoriamente ");
        } else {
            return new Response("Parametro no fue recibido satisfactoriamente");
        }
    }
}
