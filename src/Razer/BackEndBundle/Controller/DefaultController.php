<?php

namespace Razer\BackEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
		$name = 'Harroo';
	
        return $this->render('RazerBackEndBundle:Default:index.html.twig', array('name' => $name));
    }
}
