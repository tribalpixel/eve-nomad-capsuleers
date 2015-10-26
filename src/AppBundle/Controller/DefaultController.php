<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {       
        if( $this->getUser() ) {
            $perry = $this->get('eve_nomad.perry');
            $infos = $perry->__get('');
            return $this->render('AppBundle:Default:index.html.twig', array('infos'=>$infos));
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
