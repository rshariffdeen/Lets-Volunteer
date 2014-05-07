<?php

namespace Spiralation\StylesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SpiralationStylesBundle:Default:index.html.twig', array('name' => $name));
    }
}
