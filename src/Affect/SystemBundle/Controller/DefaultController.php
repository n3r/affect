<?php

namespace Affect\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AffectSystemBundle:Default:index.html.twig', array('name' => $name));
    }
}
