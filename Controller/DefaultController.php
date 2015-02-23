<?php

namespace Applikacjonizm\Bundle\CrudGeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplikacjonizmCrudGeneratorBundle:Default:index.html.twig', array('name' => $name));
    }
}
