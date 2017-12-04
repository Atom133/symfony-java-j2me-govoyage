<?php

namespace Pi\GeneralBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Commentaire {   
    /**
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     * @ORM\Column(type="integer")  
     */
    private $id;   
     /**
     * @ORM\Column(type="text")
     */
    private $post;
     /**
     * @ORM\Column(type="datetime")
     */ 
    private $dateAdd ;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateUpdate;
    /**
     * @ORM\ManyToOne(targetEntity="Personne\PersonneBundle\Entity\Personne")
     */     
    private $personne;
    
    
   
    public function __construct() {
        $this->setDateAdd(new \DateTime());
        $this->setDateAdd(new \DateTime());
    }
    
    /**
     * @ORM\preUpdate
     */
    public function setDateUpdateValue() {
        $this->setDateUpdate(new \DateTime());
    }
    
    
    function getId() {
        return $this->id;
    }

    function getPost() {
        return $this->post;
    }

    function getDateAdd() {
        return $this->dateAdd;
    }

    function getId_personne() {
        return $this->id_personne;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPost($post) {
        $this->post = $post;
    }

    function setDateAdd($dateAdd) {
        $this->dateAdd = $dateAdd;
    }

    function setId_personne($id_personne) {
        $this->id_personne = $id_personne;
    }


    
    
    
}
