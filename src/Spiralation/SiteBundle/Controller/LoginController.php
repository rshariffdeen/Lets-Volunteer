<?php

namespace Spiralation\SiteBundle\Controller;
use Spiralation\EntityBundle\Form\VolunteerType;
use Spiralation\EntityBundle\Entity\Volunteer;
use Spiralation\EntityBundle\Entity\Organization;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpiralationSiteBundle:login:login.html.twig');
    }

    public function loginAction(Request $request)
    {
        $session = $request->getSession();
        if ($request->getMethod() == 'POST') {

            $session->clear();
            $email = $request->get('username');
            $password = $request->get('password');

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('SpiralationEntityBundle:User');

            $user = $repository->findOneBy(array('email' => $email, 'password' => $password));

            if($user){
                $volunteer = $user->getVolunteer();
                $organization = $user->getOrganization();

                if($volunteer != null){
                    $vol_id = $volunteer->getVolunteerId();
                    $session->set('vol_id', $vol_id);
                    $session->set('name',$volunteer->getFirstName());

                    return $this->redirect($this->generateUrl('homeV', array('id' => $vol_id)));
                }elseif($organization != null){
                    $org_id = $organization->getOrganizationId();
                    $session->set('org_id',$org_id);
                    $session->set('name',$organization->getName());

                    return $this->redirect($this->generateUrl('homeO', array('id' => $org_id)));
                }
            }

            return $this->render('SpiralationSiteBundle:login:login.html.twig',array(
                'type' => 'E',
                'message' => 'Invalid Login'
            ));
        }
    }
}
