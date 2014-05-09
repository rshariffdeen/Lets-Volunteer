<?php

namespace Spiralation\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class ProfileController extends Controller
{
    public function homeAction(Request $request)
    {
        
        return $this->render('SpiralationUserBundle:Profile:volunteer.html.twig');
    }
}
