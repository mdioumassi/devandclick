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
        //Legumes
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
        
        //Fruits
        $media5 = new Media();
        $media5->setPath("http://www2.mes-coloriages-preferes.biz/colorino/Images/Large/Nature-Fruits-Fraise-684831.png");
        $media5->setAlt("Orange");
        $manager->persist($media5);
        
        $media6 = new Media();
        $media6->setPath("http://www.grands-meres.net/wp-content/uploads/2011/11/les-bananes.jpg");
        $media6->setAlt("Banane");
        $manager->persist($media6);
        
        $media7 = new Media();
        $media7->setPath("http://icons.veryicon.com/256/Leisure/Japan%20Summer/Watermelon.png");
        $media7->setAlt("Melon");
        $manager->persist($media7);
        
        $media8 = new Media();
        $media8->setPath("http://www.mi-aime-a-ou.com/flore_la_reunion/psidium_guajava_02.jpg");
        $media8->setAlt("Goyave");
        $manager->persist($media8);
        
        $manager->flush();
                
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);
        

    }
    
    public function getOrder()
    {
        return 1;
    }
}