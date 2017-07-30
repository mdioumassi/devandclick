<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Form\RechercheType;

class ProduitController extends Controller
{
       
   /**
    * @Route("/", name="nosproduits")
    * 
    */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('AppBundle:Produit')->findBy(array('disponible' =>1));
        
        if(null === $produits){
            throw $this->createNotFoundException("Pas de produits trouvé");
        }
        
        return $this->render('AppBundle:Produit:index.html.twig', array(
           'produits'=>$produits
        ));
    }

    /**
     * @Route("/detail/{id}",name="detail_produit")
     */
    public function detailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('AppBundle:Produit')->find($id);
        
        if(null == $produit){
            throw $this->createNotFoundException("Pas de produit trouvé");
        }
        return $this->render('AppBundle:Produit:detail.html.twig', array(
            'produit'=>$produit
        ));
    }
    
     /**
     * @Route("/categorie/{id}", name="categorie")
     * @param type $id
     */
    public function categorieAction($id){
       $em = $this->getDoctrine()->getManager();
       
       $produits = $em->getRepository('AppBundle:Produit')->getProduitByCategorie($id);
       $categorie = $em->getRepository('AppBundle:Categorie')->find($id);
       if(null == $categorie){
            throw $this->createNotFoundException("Pas de catégorie trouvé");
        }
        if(null == $produits){
            throw $this->createNotFoundException("Pas de produits trouvé");
        }
       return $this->render('AppBundle:Produit:produit.html.twig', array(
           'produits' => $produits
       ));
    }
   
    public function rechercheAction(){
        $form = $this->createForm(RechercheType::class);
        
        return $this->render('AppBundle:Recherche:recherche.html.twig', array(
            'form' => $form->createView()
        )); 
    }
    
    /**
     * @Route("/recherche", name="searchproduct")
     *
     */
    public function rechercheResultatAction(Request $request){
        $form = $request->get('appbundle_recherche');
        $em = $this->getDoctrine()->getManager();

        $produits = $em->getRepository('AppBundle:Produit')->recherche($form['search']);
        return $this->render('AppBundle:Produit:index.html.twig', array(
           'produits'=>$produits
        ));
    }
}
