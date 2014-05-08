<?php

namespace Spiralation\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpiralationSiteBundle:Index:index.html.twig', array(hhhh"type"=>'S',"message"=>'test'));
    }
}
