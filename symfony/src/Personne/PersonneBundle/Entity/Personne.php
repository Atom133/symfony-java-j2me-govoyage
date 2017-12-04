<?php

namespace Personne\PersonneBundle\Entity;

use Personne\PersonneBundle\Entity\Utilisateur as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Personne {

   /**
     * @ORM\GeneratedValue
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
    private $prenom;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $sexe;
    /**
     * @ORM\Column(type="boolean")
     */
    private $statut; //admin 1 ou membre 0
    /**
     * @ORM\Column(type="date")
     */ 
    private $dateNaissance ;    
     /**
     * @ORM\Column(type="string",length=255,unique=true)
     */   
    private $email;
    /**
     * @ORM\Column(type="string",length=255,unique=true)
     */   
    private $login;
    /**
     * @ORM\Column(type="string",length=255)
     */   
    private $pwd;
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getStatut() {
        return $this->statut;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getEmail() {
        return $this->email;
    }

    function getLogin() {
        return $this->login;
    }

    function getPwd() {
        return $this->pwd;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setStatut($statut) {
        $this->statut = $statut;
    }

    function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPwd($pwd) {
        $this->pwd = $pwd;
    }
}
