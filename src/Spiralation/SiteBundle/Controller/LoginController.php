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
            $username = $request->get('email');
            $password = $request->get('password');

            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('SpiralationEntityBundle:User');

            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));

            if($user){
                $volunteer = $user->getVolunteer();
                $organization = $user->getOrganization();

                if($volunteer != null){
                    $vol_id = $volunteer->getVolunteerId();
                    $session->set('vol_id', $vol_id);
                    //session
                    $login = new Login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);

                    return $this->redirect($this->generateUrl('profile', array('vol_id' => $vol_id)));
                }elseif($organization != null){
                    $org_id = $organization->getOrganizationId();
                    $session->set('org_id',$org_id);
                    //session
                    $login = new Login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);

                    return $this->redirect($this->generateUrl('profile', array('org_id' => $org_id)));
                }
            }

            return $this->render('SpiralationSiteBundle:login:login.html.twig',array(
                'type' => 'E',
                'message' => 'Invalid Login'
            ));
        }
    }
}
