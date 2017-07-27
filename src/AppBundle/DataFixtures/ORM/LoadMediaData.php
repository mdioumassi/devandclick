<?php

// src/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Media;

class LoadMediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //Fruits
        $media1 = new Media();
        $media1->setPath("http://copinette.c.o.pic.centerblog.net/0_d6157_4beceb31_L.png");
        $media1->setAlt("Carotte");
        $manager->persist($media1);
        
        $media2 = new Media();
        $media2->setPath("http://www.supermarchesmatch.fr/userfiles/images/courgette.png");
        $media2->setAlt("Courgette");
        $manager->persist($media2);
        
        $media3 = new Media();
        $media3->setPath("https://www.toutpratique.com/img/cms/salade-verte-laitue-scarole-pesticide-comment-laver-la-salade-salade-en-sachet-danger.png");
        $media3->setAlt("Salade Vert");
        $manager->persist($media3);
        
        $media4 = new Media();
        $media4->setPath("http://www.cnipt-pommesdeterre.com/wp-content/themes/boilerplate/images/nutrition/potato_ideas_01.png");
        $media4->setAlt("Pomme de Terre");
        $manager->persist($media4);
        
        $manager->flush();
                
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        

    }
    
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}