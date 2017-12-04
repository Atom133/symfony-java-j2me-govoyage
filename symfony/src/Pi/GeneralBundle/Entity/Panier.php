<?php

namespace Pi\GeneralBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Panier {
   
    /**
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(type="integer")  
     */
    private $id;  
     /**
     * @ORM\Column(type="float")
     */ 
    private $prix;
    /**
     * @ORM\Column(type="integer")
     */
    private $total;
    /**
     * @ORM\ManyToOne(targetEntity="Hotel")
     */     
    private $hotel;
    /**
     * @ORM\ManyToOne(targetEntity="Sejour")
     */     
    private $sejour;
    /**
     * @ORM\ManyToOne(targetEntity="Vol")
     */     
    private $vol;
    /**
     * @ORM\ManyToOne(targetEntity="Personne\PersonneBundle\Entity\Personne")
     */     
    private $personne;
    
    function getId() {
        return $this->id;
    }

    function getPrix() {
        return $this->prix;
    }

    function getTotal() {
        return $this->total;
    }

    function getHotel() {
        return $this->hotel;
    }

    function getSejour() {
        return $this->sejour;
    }

    function getVol() {
        return $this->vol;
    }

    function getPersonne() {
        return $this->personne;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setHotel($hotel) {
        $this->hotel = $hotel;
    }

    function setSejour($sejour) {
        $this->sejour = $sejour;
    }

    function setVol($vol) {
        $this->vol = $vol;
    }

    function setPersonne($personne) {
        $this->personne = $personne;
    }


    
}