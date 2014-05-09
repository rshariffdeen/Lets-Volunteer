<?php

namespace Spiralation\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('SpiralationEntityBundle:Organization');
        
        $environment = $repository->findBy(array('type'=>'1'));
        $poverty = $repository->findBy(array('type'=>'2'));
        $health = $repository->findBy(array('type'=>'3'));
        $education = $repository->findBy(array('type'=>'4'));
        $disaster = $repository->findBy(array('type'=>'5'));
        $human = $repository->findBy(array('type'=>'6'));
        
        return $this->render('SpiralationSiteBundle:Index:index.html.twig', array(
            "environment"=>$environment,
            "poverty"=>$poverty,
            "health"=>$health,
            "education"=>$education,
            "disaster"=>$disaster,
            "human"=>$human
                
                ));
    }
}
