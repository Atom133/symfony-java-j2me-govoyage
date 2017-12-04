<?php

namespace Pi\GeneralBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Sejour {
   
    /**
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(type="integer")  
     */
    private $id;  
     /**
     * @ORM\Column(type="date")
     */ 
    private $date_debut;
     /**
     * @ORM\Column(type="date")
     */ 
    private $date_fin;
    /**
     * @ORM\Column(type="float")
     */
    private $prix;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $plan;
    /**
     * @ORM\ManyToOne(targetEntity="Hotel")
     */     
    private $hotel;
    /**
     * @ORM\ManyToOne(targetEntity="Vol")
     */     
    private $vol;
    
    function getId() {
        return $this->id;
    }

    function getDate_debut() {
        return $this->date_debut;
    }

    function getDate_fin() {
        return $this->date_fin;
    }

    function getPrix() {
        return $this->prix;
    }

    function getPlan() {
        return $this->plan;
    }

    function getHotel() {
        return $this->hotel;
    }

    function getVol() {
        return $this->vol;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate_debut($date_debut) {
        $this->date_debut = $date_debut;
    }

    function setDate_fin($date_fin) {
        $this->date_fin = $date_fin;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setPlan($plan) {
        $this->plan = $plan;
    }

    function setHotel($hotel) {
        $this->hotel = $hotel;
    }

    function setVol($vol) {
        $this->vol = $vol;
    }


    
}