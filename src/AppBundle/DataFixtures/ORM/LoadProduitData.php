<?php

// src/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Produit;

class LoadProduitData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //Legumes
        $prod1 = new Produit();
        $prod1->setNom("carotte");
        $prod1->setCategorie($this->getReference('categorie1'));
        $prod1->setImage($this->getReference('media1'));
        $prod1->setTva($this->getReference('tva1'));
        $prod1->setDescription("La carotte est bon pour la sante");
        $prod1->setDisponible('1');
        $prod1->setPrix('1.99');
        $manager->persist($prod1);
        
        $prod2 = new Produit();
        $prod2->setNom("Courgette");
        $prod2->setCategorie($this->getReference('categorie1'));
        $prod2->setImage($this->getReference('media2'));
        $prod2->setTva($this->getReference('tva1'));
        $prod2->setDescription("La Courgette est bon pour la sante");
        $prod2->setDisponible('1');
        $prod2->setPrix('1.99');
        $manager->persist($prod2);
        
        $prod3 = new Produit();
        $prod3->setNom("Salade Vert");
        $prod3->setCategorie($this->getReference('categorie1'));
        $prod3->setImage($this->getReference('media3'));
        $prod3->setTva($this->getReference('tva1'));
        $prod3->setDescription("La Salade Vert est bon pour la sante");
        $prod3->setDisponible('1');
        $prod3->setPrix('1.99');
        $manager->persist($prod3);
        
        $prod4 = new Produit();
        $prod4->setNom("Pomme de Terre");
        $prod4->setCategorie($this->getReference('categorie1'));
        $prod4->setImage($this->getReference('media4'));
        $prod4->setTva($this->getReference('tva1'));
        $prod4->setDescription("Le Pomme de Terre est bon pour la sante");
        $prod4->setDisponible('1');
        $prod4->setPrix('1.99');
        $manager->persist($prod4);
        
        //Fruits
        $prod5 = new Produit();
        $prod5->setNom("Orange");
        $prod5->setCategorie($this->getReference('categorie2'));
        $prod5->setImage($this->getReference('media5'));
        $prod5->setTva($this->getReference('tva1'));
        $prod5->setDescription("Orange est bon pour la sante");
        $prod5->setDisponible('1');
        $prod5->setPrix('2.99');
        $manager->persist($prod5);
        
        $prod6 = new Produit();
        $prod6->setNom("Banane");
        $prod6->setCategorie($this->getReference('categorie2'));
        $prod6->setImage($this->getReference('media6'));
        $prod6->setTva($this->getReference('tva1'));
        $prod6->setDescription("La Banane est bon pour la sante");
        $prod6->setDisponible('1');
        $prod6->setPrix('2.99');
        $manager->persist($prod6);
        
        $prod7 = new Produit();
        $prod7->setNom("Melon");
        $prod7->setCategorie($this->getReference('categorie2'));
        $prod7->setImage($this->getReference('media7'));
        $prod7->setTva($this->getReference('tva1'));
        $prod7->setDescription("Le Melon est bon pour la sante");
        $prod7->setDisponible('1');
        $prod7->setPrix('2.99');
        $manager->persist($prod7);
        
        $prod8 = new Produit();
        $prod8->setNom("Goyave");
        $prod8->setCategorie($this->getReference('categorie2'));
        $prod8->setImage($this->getReference('media8'));
        $prod8->setTva($this->getReference('tva1'));
        $prod8->setDescription("La Goyave est bon pour la sante");
        $prod8->setDisponible('1');
        $prod8->setPrix('2.99');
        $manager->persist($prod8);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 4;
    }
}