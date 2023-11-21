<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MensajeController extends Controller
{
    public function enviarMensajeAction($mensaje){
        return new Response('<i>'.$mensaje.'</i>');
    }
    public function enviarMensajePlantillaAction($mensaje){
        return $this->render('mensaje/index.html.twig', array('mensaje'=> $mensaje));
}
}