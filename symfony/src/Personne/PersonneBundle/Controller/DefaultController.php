<?php

namespace Personne\PersonneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PersonneBundle:Default:index.html.twig', array('name' => $name));
    }
public function showAction()
        
{
    
    
      $em=$this->getDoctrine()->getManager();
        $utilisateur=$em->getRepository('PersonnePersonneBundle:Utilisateur')->findAll();
        return $this->render('PiGeneralBundle:admin:basic_tables.html.twig',array('utilisateur'=>$utilisateur));
  
 
}
    



   
}
