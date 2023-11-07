<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ForecastController extends Controller{

    public function indexAction()
    {
        return new Response('hace mucho frio');
    }
    public function indexParamAction($weather){
        return new Response('<html><body>Weather info: it\'s ' . $weather. '</body></html>');
    }
    public function index2ParamsAction($weather, $temperature){
        return new Response('<html><body>Weather info: it\'s ' . $weather. ' hace una temperatura de '. $temperature . ' </body></html>');
    }

    public function indexRequestAction($weather, $temperature, Request $request){
        return new Response('<html><body>Weather info in ' . $request->query->get('ciudad') . ': It\'s ' . $weather 
        . 'and the current temperature is: ' . $temperature . ' ºC</body></html>');
    }    
}
