<?php

namespace Spiralation\SiteBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Spiralation\EntityBundle\Entity\Volunteer;
use Spiralation\EntityBundle\Form\VolunteerType;
use Spiralation\EntityBundle\Entity\User;


class RegisterController extends Controller
{
    public function formAction(Request $request)
    {
       $Volunteer = new Volunteer();
            $form = $this->createForm(new VolunteerType(), $Volunteer, array(
                'action' => $this->generateUrl('create_volunteer'),
                'attr'  => array(
                    'class'=>'form-horizontal center'
                )
            ));
            
        $volunteer = new Volunteer();   
        $form->handleRequest($request);

        if ($form->isValid()) {
            $volunteer = $form->getData();
            $user = new User();
            $user->setPassword($volunteer->getPassword());
            $user->setRole(1);
            $user->setVolunteer($volunteer->getVolunteerId());
            $user->setEmail($volunteer->getEmail());
        
        try{
            $em = $this->getDoctrine()->getManager();
            $em ->persist($volunteer);
            $em->persist($user);            
            $em->flush();
            }
            catch(\Exception $e){
                echo $e;
                return $this->render('SpiralationSiteBundle:Index:index.html.twig', array(
                    'type'  => 'E',
                    'message' => ' Opz! Something went wrong. Please Try again'
                    
                    
        ));
            }

            return $this->render('SpiralationSiteBundle:index:index.html.twig', array(
                    'type'  => 'S',
                    'message' => ' Congratulations! You are now an Volunteer. You can now sign in'
                    
        ));
        }
          
           return $this->render('SpiralationSiteBundle:Register:register.html.twig', array('form' => $form->createView())); 
        
    }
    
}
 