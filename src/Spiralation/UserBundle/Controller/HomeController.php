<?php

namespace Spiralation\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class HomeController extends Controller
{
    public function organizationAction(Request $request)
    {
        
        return $this->render('SpiralationUserBundle:Home:volunteer.html.twig', array('name'=>$request->getSession()->get('name'),'id'=>$request->getSession()->get('org_id')));
    }
    
    public function volunteerAction(Request $request)
    {
        
        return $this->render('SpiralationUserBundle:Home:volunteer.html.twig', array('name'=>$request->getSession()->get('name'),'id'=>$request->getSession()->get('vol_id')));
    }
}
