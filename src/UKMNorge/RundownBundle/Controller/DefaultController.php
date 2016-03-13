<?php

namespace UKMNorge\RundownBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UKMRundownBundle:Default:index.html.twig', array('name' => $name));
    }
}
