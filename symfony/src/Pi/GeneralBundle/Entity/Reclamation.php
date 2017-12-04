<?php

namespace Pi\GeneralBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Reclamation {
   
    /**
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(type="integer")  
     */
    private $id;  
     /**
     * @ORM\Column(type="string",length=512)
     */ 
    private $msg;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $type;
    /**
     * @ORM\Column(type="date")
     */
    private $date;
     /**
     * @ORM\ManyToOne(targetEntity="Personne\PersonneBundle\Entity\Personne")
     */     
    private $personne;
    
    function getId() {
        return $this->id;
    }

    function getMsg() {
        return $this->msg;
    }

    function getType() {
        return $this->type;
    }

    function getDate() {
        return $this->date;
    }

    function getPersonne() {
        return $this->personne;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMsg($msg) {
        $this->msg = $msg;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setPersonne($personne) {
        $this->personne = $personne;
    }


}