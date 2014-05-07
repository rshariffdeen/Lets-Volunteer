<?php

namespace Spiralation\EntityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SpiralationEntityBundle:Default:index.html.twig', array('name' => $name));
    }
}
