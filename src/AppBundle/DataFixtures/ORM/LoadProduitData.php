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
        $prod2->setCategorie($this->getReference('categorie2'));
        $prod2->setImage($this->getReference('media2'));
        $prod2->setTva($this->getReference('tva1'));
        $prod2->setDescription("La Courgette est bon pour la sante");
        $prod2->setDisponible('1');
        $prod2->setPrix('1.99');
        $manager->persist($prod2);
        
        $prod3 = new Produit();
        $prod3->setNom("Salade Vert");
        $prod3->setCategorie($this->getReference('categorie3'));
        $prod3->setImage($this->getReference('media3'));
        $prod3->setTva($this->getReference('tva1'));
        $prod3->setDescription("La Salade Vert est bon pour la sante");
        $prod3->setDisponible('1');
        $prod3->setPrix('1.99');
        $manager->persist($prod3);
        
        $prod4 = new Produit();
        $prod4->setNom("Pomme de Terre");
        $prod4->setCategorie($this->getReference('categorie4'));
        $prod4->setImage($this->getReference('media4'));
        $prod4->setTva($this->getReference('tva1'));
        $prod4->setDescription("Le Pomme de Terre est bon pour la sante");
        $prod4->setDisponible('1');
        $prod4->setPrix('1.99');
        $manager->persist($prod4);
        
        $manager->flush();

    }
    
    public function getOrder()
    {
        return 4;
    }
}