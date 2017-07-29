<?php

namespace PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PageController extends Controller
{
 
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $pages = $em->getRepository('PageBundle:Page')->findAll();
        
        return $this->render('PageBundle:Page:menu.html.twig', array(
            'pages' => $pages
        ));
    }
    
    /**
     * @Route("page/{id}", name="pages")
     */
    public function pageAction($id){
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('PageBundle:Page')->find($id);
        
       // if(!$page) throw new createNot
        
        return $this->render('PageBundle:Page:page.html.twig', array(
            'page'=> $page
        ));
    }
}
