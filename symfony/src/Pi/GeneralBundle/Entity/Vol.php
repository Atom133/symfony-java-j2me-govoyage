<?php

namespace Pi\GeneralBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Vol {
   
    /**
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(type="integer")  
     */
    private $id;  
     /**
     * @ORM\Column(type="string",length=512)
     */ 
    private $date_depart;
    /**
     * @ORM\Column(type="string",length=512)
     */
    private $date_arrivee;
    /**
     * @ORM\Column(type="string",length=512)
     */
    private $heure_depart;
     /**
     * @ORM\Column(type="string",length=512)
     */
    private $heure_arrivee;
    /**
     * @ORM\Column(type="string",length=512)
     */
    private $nbr_passager;
    /**
     * @ORM\Column(type="string",length=512)
     */
    private $companie_aerienne;
    /**
     * @ORM\Column(type="string",length=512)
     */
    private $prix_billet;
    /**
     * @ORM\Column(type="string",length=512)
     */
    private $classe_billet;
   
        /**
     * @ORM\Column(type="string",length=512)
     */
    private $aeroportDepart;
        /**
     * @ORM\Column(type="string",length=512)
     */
    private $aeroportArrivee;
    function getAeroportDepart() {
        return $this->aeroportDepart;
    }

    function getAeroportArrivee() {
        return $this->aeroportArrivee;
    }

    function setAeroportDepart($aeroportDepart) {
        $this->aeroportDepart = $aeroportDepart;
    }

    function setAeroportArrivee($aeroportArrivee) {
        $this->aeroportArrivee = $aeroportArrivee;
    }

        
    function getId() {
        return $this->id;
    }

    function getDate_depart() {
        return $this->date_depart;
    }

    function getDate_arrivee() {
        return $this->date_arrivee;
    }

    function getHeure_depart() {
        return $this->heure_depart;
    }

    function getHeure_arrivee() {
        return $this->heure_arrivee;
    }

    function getNbr_passager() {
        return $this->nbr_passager;
    }

    function getCompanie_aerienne() {
        return $this->companie_aerienne;
    }

    function getPrix_billet() {
        return $this->prix_billet;
    }

    function getClasse_billet() {
        return $this->classe_billet;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate_depart($date_depart) {
        $this->date_depart = $date_depart;
    }

    function setDate_arrivee($date_arrivee) {
        $this->date_arrivee = $date_arrivee;
    }

    function setHeure_depart($heure_depart) {
        $this->heure_depart = $heure_depart;
    }

    function setHeure_arrivee($heure_arrivee) {
        $this->heure_arrivee = $heure_arrivee;
    }

    function setNbr_passager($nbr_passager) {
        $this->nbr_passager = $nbr_passager;
    }

    function setCompanie_aerienne($companie_aerienne) {
        $this->companie_aerienne = $companie_aerienne;
    }

    function setPrix_billet($prix_billet) {
        $this->prix_billet = $prix_billet;
    }

    function setClasse_billet($classe_billet) {
        $this->classe_billet = $classe_billet;
    }


}