<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TemperatureController extends Controller
{
   public function getAction ($id){
        if ($id == null || $id !=1){
            throw $this->createNotFoundException('el registro no existe');
        }else{
            return new Response("Registrado".$id);
        }
    }
    public function checkAction (Request $request){
        $session = $request->getSession();
        $log = $session->get('log', array());

        array_push($log, 'Temeperature checked at '. date('l js \of F Y h:i:s A'));
        $session->set('log', $log);

        return new Response('Temeratura chekeada cerrectamente');
    }
    public function getAllAction(Request $request){
        $session = $request->getSession();
        $log = $session->get('log', array());
        $result = '';

        foreach($log as $item){
            $result.= $item.'<br />';
        }
        return new Response ($result);
    }
}
