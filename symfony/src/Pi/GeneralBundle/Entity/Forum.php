<?php

namespace Pi\GeneralBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Forum {
   
    /**
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(type="integer")  
     */
    private $id;  
     /**
     * @ORM\Column(type="string",length=255)
     */ 
    private $titre;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $contenu;
     /**
     * @ORM\ManyToOne(targetEntity="Personne\PersonneBundle\Entity\Personne")
     */     
    private $personne;
    
    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getContenu() {
        return $this->contenu;
    }

    function getPersonne() {
        return $this->personne;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function setPersonne($personne) {
        $this->personne = $personne;
    }


}