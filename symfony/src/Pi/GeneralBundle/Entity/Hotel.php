<?php

namespace Pi\GeneralBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Hotel {
   
    /**
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(type="integer")  
     */
    private $id;  
     /**
     * @ORM\Column(type="string",length=255)
     */ 
    private $nom;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $ville;
    /**
     * @ORM\Column(type="integer")
     */
    private $etoiles;
    /**
     * @ORM\Column(type="string",length=512)
     */
    private $adresse;
    /**
     * @ORM\Column(type="float")
     */
    private $prix_nuit;

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getVille() {
        return $this->ville;
    }

    function getEtoiles() {
        return $this->etoiles;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getPrix_nuit() {
        return $this->prix_nuit;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setEtoiles($etoiles) {
        $this->etoiles = $etoiles;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setPrix_nuit($prix_nuit) {
        $this->prix_nuit = $prix_nuit;
    }


    
}