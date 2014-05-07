<?php

namespace Spiralation\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpiralationSiteBundle:Default:index.html.twig');
    }
}
