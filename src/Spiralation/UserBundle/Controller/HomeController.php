<?php

namespace Spiralation\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class HomeController extends Controller
{
    public function organizationAction(Request $request)
    {
        return $this->render('SpiralationUserBundle:Profile:volunteer.html.twig');
    }
    
    public function volunteerAction(Request $request)
    {
        
        return $this->render('SpiralationUserBundle:Profile:volunteer.html.twig');
    }
}
