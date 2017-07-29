<?php

// src/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface 
{
    private $container;
    
    public function setContainer(ContainerInterface $container = null){
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setUsername('mohamed');
        $user1->setEmail('mdioumassi@yahoo.fr');
        $user1->setEnabled(1);
        $user1->setPassword($this->container->get('security.encoder_factory')->getEncoder($user1)->encodePassword('mohamed', $user1->getSalt()));
        
        $manager->persist($user1);
        
        $manager->flush();
                
        $this->addReference('user1', $user1);
     //   $this->addReference('tva2', $tva2);
        

    }
    
    public function getOrder()
    {
        return 5;
    }
}