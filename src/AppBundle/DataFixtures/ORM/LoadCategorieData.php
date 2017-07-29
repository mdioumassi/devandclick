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
        $cat2->setNom("Fruits");
        $cat2->setImage($this->getReference("media5"));
        $manager->persist($cat2);
        
        
        
        $manager->flush();
                
        $this->addReference('categorie1', $cat1);    
        $this->addReference('categorie2', $cat2);
    }
    
    public function getOrder()
    {
        return 2;
    }
}