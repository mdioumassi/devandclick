<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PanierController extends Controller
{
    /**
     * @Route("/panier", name="panier")
     */
    public function panierAction()
    {
        return $this->render('AppBundle:Panier:panier.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/livraison", name="livraison")
     */
    public function livraisonAction()
    {
        return $this->render('AppBundle:Panier:livraison.html.twig', array(
            // ...
        ));
    }
    
    
    /**
     * @Route("/validation", name="validation")
     */
    public function validationAction()
    {
        return $this->render('AppBundle:Panier:validation.html.twig', array(
            // ...
        ));
    }
    
    

    
}
