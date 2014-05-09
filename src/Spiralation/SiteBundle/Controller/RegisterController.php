<?php

namespace Spiralation\SiteBundle\Controller;

use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Spiralation\EntityBundle\Entity\Volunteer;
use Spiralation\EntityBundle\Form\VolunteerType;
use Spiralation\EntityBundle\Entity\User;

use Spiralation\EntityBundle\Entity\Organization;
use Spiralation\EntityBundle\Form\OrganizationType;

class RegisterController extends Controller
{
    public function VolunteerAction(Request $request)
    {
        $volunteer = new Volunteer();
        $form = $this->createForm(new VolunteerType(), $volunteer, array(
            'action' => $this->generateUrl('create_volunteer'),
            'attr' => array(
                'class' => 'form-horizontal center'
            )
        ));


        $form->handleRequest($request);

        if ($form->isValid()) {
            $volunteer = $form->getData();
            $user = new User();
            $user->setPassword($volunteer->getPassword());
            $user->setRole(1);
            $user->setVolunteer($volunteer->getVolunteerId());
            $user->setEmail($volunteer->getEmail());

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($volunteer);
                $em->persist($user);
                $em->flush();
            } catch (\Exception $e) {
                echo $e;
                return $this->render('SpiralationSiteBundle:Index:index.html.twig', array(
                    'type' => 'E',
                    'message' => ' Opz! Something went wrong. Please Try again'


                ));
            }

            return $this->render('SpiralationSiteBundle:index:index.html.twig', array(
                'type' => 'S',
                'message' => ' Congratulations! You are now an Volunteer. You can now sign in'

            ));
        }

        return $this->render('SpiralationSiteBundle:Register:register.html.twig', array('form' => $form->createView()));

    }
    /**
     *@Route("/registerAndroid", name="create_volunteer_android")
     *@Method("POST")
     *@Template()
     */
    public function formAndroidAction(Request $request)
    {
        $response = new Response();
        echo $request;
        if($request != null){
            $volunteer = new Volunteer();
            $volunteer->setEmail($request->get('email'));
            $volunteer->setPassword($request->get('password'));

            try{
            $em = $this->getDoctrine()->getManager();
            $em->persist($volunteer);
            $em->flush();
            }
            catch(\Exception $e){
                $response->setStatusCode(500);
                return $response;
            }

            $response->setStatusCode(201);
            return $response;
        }
        $response->setStatusCode(400);
        return $response;
    }

    public function OrganizationAction(Request $request)
    {
        $Organization = new Organization();
        $form = $this->createForm(new OrganizationType(), $Organization, array(
            'action' => $this->generateUrl('create_organization'),
            'attr' => array(
                'class' => 'form-horizontal center'
            )
        ));


        $form->handleRequest($request);

        if ($form->isValid()) {
            $Organization = $form->getData();
            $user = new User();
            $user->setPassword($Organization->getPassword());
            $user->setRole(2);
            $user->setOrganization($Organization->getOrganizationId());
            $user->setEmail($Organization->getEmail());

            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($Organization);
                $em->persist($user);
                $em->flush();
            } catch (\Exception $e) {
                echo $e;
                return $this->render('SpiralationSiteBundle:Index:index.html.twig', array(
                    'type' => 'E',
                    'message' => ' Opz! Something went wrong. Please Try again'


                ));
            }

            return $this->render('SpiralationSiteBundle:index:index.html.twig', array(
                'type' => 'S',
                'message' => ' Congratulations! Your Organization is added. You can now sign in'

            ));
        }

        return $this->render('SpiralationSiteBundle:Register:register.html.twig', array('form' => $form->createView()));

    }

}
 