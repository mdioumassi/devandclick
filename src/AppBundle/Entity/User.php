<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Commande", cascade={"persist", "remove"}, mappedBy="utilisateur")
     * @ORM\JoinColumn(nullable=true)
     * @var type 
     */
    private $commandes;
    
      /**
     * @ORM\OneToMany(targetEntity="UtilisateurAdresse", cascade={"persist", "remove"}, mappedBy="utilisateur")
     * @ORM\JoinColumn(nullable=true)
     * @var type 
     */
    private $adresses;

    /**
     * Add commande
     *
     * @param \AppBundle\Entity\Commande $commande
     *
     * @return Utilisateur
     */
    public function addCommande(\AppBundle\Entity\Commande $commande)
    {
        $this->commandes[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \AppBundle\Entity\Commande $commande
     */
    public function removeCommande(\AppBundle\Entity\Commande $commande)
    {
        $this->commandes->removeElement($commande);
    }

    /**
     * Get commandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * Add adress
     *
     * @param \AppBundle\Entity\UtilisateurAdresse $adress
     *
     * @return Utilisateur
     */
    public function addAdress(\AppBundle\Entity\UtilisateurAdresse $adress)
    {
        $this->adresses[] = $adress;

        return $this;
    }

    /**
     * Remove adress
     *
     * @param \AppBundle\Entity\UtilisateurAdresse $adress
     */
    public function removeAdress(\AppBundle\Entity\UtilisateurAdresse $adress)
    {
        $this->adresses->removeElement($adress);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdresses()
    {
        return $this->adresses;
    }
}
