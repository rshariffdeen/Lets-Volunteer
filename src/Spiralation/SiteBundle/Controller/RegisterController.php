<?php

namespace Spiralation\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Spiralation\EntityBundle\Entity\Volunteer;
use Spiralation\EntityBundle\Form\VolunteerType;
class RegisterController extends Controller
{
    public function formAction()
    {
       $Volunteer = new Volunteer();
            $form = $this->createForm(new VolunteerType(), $Volunteer, array(
                'action' => $this->generateUrl('create_volunteer'),
                'attr'  => array(
                    'class'=>'form-horizontal center'
                )
            ));
            
          
           return $this->render('SpiralationSiteBundle:Register:register.html.twig', array('form' => $form->createView())); 
        
    }
    
}
 