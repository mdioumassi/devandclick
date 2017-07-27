<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProduitController extends Controller
{
   /**
    * @Route("/", name="nosproduits")
    * 
    */
    public function indexAction()
    {
        return $this->render('AppBundle:Produit:produit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/produit/detail",name="detail_produit")
     */
    public function detailAction()
    {
        return $this->render('AppBundle:Produit:detail.html.twig', array(
            // ...
        ));
    }

}
