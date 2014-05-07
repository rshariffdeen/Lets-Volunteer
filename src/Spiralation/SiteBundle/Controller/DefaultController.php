<?php

namespace Spiralation\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SpiralationSiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
