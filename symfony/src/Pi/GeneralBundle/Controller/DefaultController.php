<?php

namespace Pi\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Entity\Product;
use Symfony\Entity\Utilisateur;
use Personne\PersonneBundle\Entity;

class DefaultController extends Controller
{
    public function indexAction()
    {
   
        return $this->render('PiGeneralBundle:Default:index.html.twig');
    }
    public function destinationsAction()
    {
        return $this->render('PiGeneralBundle:Default:offers_list.html.twig');
    }
    public function specialOffresAction()
    {
        return $this->render('PiGeneralBundle:Default:offers_list.html.twig');
    }
    public function hotelsAction()
    {
        return $this->render('PiGeneralBundle:Default:hotels.html.twig');
    }
    public function flightsAction()
    {
        return $this->render('PiGeneralBundle:Default:billets.html.twig');
    }
    public function blogAction()
    {
        return $this->render('PiGeneralBundle:Default:blog.html.twig');
    }
    
    public function blog_detailsAction()
    {
        return $this->render('PiGeneralBundle:Default:blog-details.html.twig');
    }
    
    public function contactUsAction()
    {
        return $this->render('PiGeneralBundle:Default:contact_us.html.twig');
    }
    public function aboutUsAction()
    {
        return $this->render('PiGeneralBundle:Default:about_us.html.twig');
    }
    public function OffersListAction()
    {
        return $this->render('PiGeneralBundle:Default:offers_list.html.twig');
    }
    public function OfferDetailsAction()
    {
        return $this->render('PiGeneralBundle:Default:offres_details.html.twig');
    }
    public function basic_tablesAction()
    {
        
        
        
        $em=$this->getDoctrine()->getManager();
        $utilisateur=$em->getRepository('PersonneBundle:Utilisateur')->findAll();
        return $this->render('PiGeneralBundle:admin:basic_tables.html.twig',array('utilisateurs'=>$utilisateur));
  
        
        
        //return $this->render('PiGeneralBundle:admin:basic_tables.html.twig',array());
    }
    public function composeAction()
    {
        return $this->render('PiGeneralBundle:admin:compose.html.twig',array());
    }
    public function formsAction()
    {
        return $this->render('PiGeneralBundle:admin:forms.html.twig',array());
    }
    public function graphsAction()
    {
        return $this->render('PiGeneralBundle:admin:graphs.html.twig',array());
    }
    public function guidesAction()
    {
        return $this->render('PiGeneralBundle:admin:guides.html.twig',array());
    }
    public function inboxAction()
    {
        return $this->render('PiGeneralBundle:admin:inbox.html.twig',array());
    }
    public function index1Action()
    {
        return $this->render('PiGeneralBundle:admin:index1.html.twig',array());
    }
    public function loginAction()
    {
        return $this->render('PiGeneralBundle:admin:login.html.twig',array());
    }
    public function mediaAction()
    {
        return $this->render('PiGeneralBundle:admin:media.html.twig',array());
    }
    public function registerAction()
    {
        return $this->render('PiGeneralBundle:admin:register.html.twig',array());
    }
    public function validationAction()
    {
        return $this->render('PiGeneralBundle:admin:validation.html.twig',array());
    }
    public function widgetsAction()
    {
        return $this->render('PiGeneralBundle:admin:widgets.html.twig',array());
    }
    public function yypographyAction()
    {
        return $this->render('PiGeneralBundle:admin:yypography.html.twig',array());
    }
    public function deleteAction($id)
    {
   $em = $this->getDoctrine()->getManager();
            $utilisateur = $em->getRepository('PersonneBundle:Utilisateur')->find($id);
            $em->remove($utilisateur);
            $em->flush();
      

        return $this->redirect($this->generateUrl('pi_general_basic_tables'));
    }
    
    
    
  public function users_activateAction($id)
    {
     $em = $this->getDoctrine()->getManager();
            $utilisateur = $em->getRepository('PersonneBundle:Utilisateur')->find($id);
            
        $utilisateur->setEnabled(1);
            $em->persist($utilisateur);
            $em->flush();
        return $this->redirect($this->generateUrl('pi_general_basic_tables'));
    }
  public function users_desactivateAction($id)
    {
     $em = $this->getDoctrine()->getManager();
            $utilisateur = $em->getRepository('PersonneBundle:Utilisateur')->find($id);
            
        $utilisateur->setEnabled(0);
            $em->persist($utilisateur);
            $em->flush();
        return $this->redirect($this->generateUrl('pi_general_basic_tables'));
    }
    

 
    
     


   
}




