<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategorieController extends Controller {
    //put your code here
    public function menuAction(){
        $em = $this->getDoctrine()->getManager();
        
        $categories = $em->getRepository('AppBundle:Categorie')->findAll();
        
        if(null === $categories){
            throw $this->createNotFoundException("Pas de catégorie trouvée");
        }
        
        return $this->render('AppBundle:Categorie:menu.html.twig', array(
            'categories' => $categories
        ));
    }
}
