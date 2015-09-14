<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {       
        if( $this->getUser() ) {
            return $this->render('AppBundle:Default:index.html.twig', array());
        }
        else {
            return $this->redirect($this->generateUrl("fos_user_security_login"));
        }
    }
    
    public function settingsAction()
    {
        return $this->render('AppBundle:Settings:index.html.twig', array());
    }    
}
