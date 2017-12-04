<?php

namespace Pi\GeneralBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Experience {
   
    /**
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(type="integer")  
     */
    private $id;  
     /**
     * @ORM\Column(type="date")
     */ 
    private $date;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $ville;
    /**
     * @ORM\Column(type="float")
     */
    private $note;
    /**
     * @ORM\Column(type="string",length=512)
     */
    private $description;
     /**
     * @ORM\Column(type="blob")
     */
    private $contenu;
     /**
     * @ORM\ManyToOne(targetEntity="Personne\PersonneBundle\Entity\Personne")
     */     
    private $personne;
    
    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getVille() {
        return $this->ville;
    }

    function getNote() {
        return $this->note;
    }

    function getCout() {
        return $this->cout;
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

    function setDate($date) {
        $this->date = $date;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setNote($note) {
        $this->note = $note;
    }

    function setCout($cout) {
        $this->cout = $cout;
    }

    function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    function setPersonne($personne) {
        $this->personne = $personne;
    }


    
    
    
    
}
