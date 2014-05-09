<?php

namespace Spiralation\SiteBundle\Controller;
use Spiralation\EntityBundle\Form\VolunteerType;
use Spiralation\EntityBundle\Entity\Volunteer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpiralationSiteBundle:login:login.html.twig');
    }
    
    
    
}
