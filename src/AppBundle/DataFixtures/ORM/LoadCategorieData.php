<?php

// src/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Categorie;

class LoadCategorieData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $cat1 = new Categorie();
        $cat1->setNom("Legumes");
        $cat1->setImage($this->getReference("media1"));
        $manager->persist($cat1);
        
        $cat2 = new Categorie();
        $cat2->setNom("Legumes");
        $cat2->setImage($this->getReference("media2"));
        $manager->persist($cat2);
        
        $cat3 = new Categorie();
        $cat3->setNom("Legumes");
        $cat3->setImage($this->getReference("media3"));
        $manager->persist($cat3);
        
        $cat4 = new Categorie();
        $cat4->setNom("Legumes");
        $cat4->setImage($this->getReference("media4"));
        $manager->persist($cat4);
        
        $manager->flush();
                
        $this->addReference('categorie1', $cat1);
        $this->addReference('categorie2', $cat2);
        $this->addReference('categorie3', $cat3);
        $this->addReference('categorie4', $cat4);
        

    }
    
    public function getOrder()
    {
        return 2;
    }
}