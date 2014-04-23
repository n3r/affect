<?php

namespace Affect\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AffectBackendBundle:Default:index.html.twig', array('name' => $name));
    }
}
