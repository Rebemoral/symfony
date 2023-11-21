<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class OperacionesController extends Controller
{
    public function sumarAction ($numero1, $numero2){
        return new Response('La suma de '.$numero1.'y'.$numero2.'es'.($numero1+$numero2));
    }
    public function restarAction ($numero1, $numero2){
        return new Response('La resta de '.$numero1.'y'.$numero2.'es'.($numero1-$numero2));
    }
    public function multiplicarAction ($numero1, $numero2){
        return new Response('La multiplicar de '.$numero1.'y'.$numero2.'es'.($numero1*$numero2));
    }
    public function dividirAction ($numero1, $numero2){
        return new Response('La dividir de '.$numero1.'y'.$numero2.'es'.($numero1/$numero2));
    }
}
