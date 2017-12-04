/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

/**
 *
 * @author Sony
 */
public class Restaurent {
     private   int id;
    private String nom;
   private  String adresse;
   private  String pays;
   private  int nbre_fourchette;
   private  String description;
   private  float evaluation;

    public Restaurent() {
    }
      public Restaurent( String nom, String adresse, String pays, int nb_fourchette, String description) {
       
        this.nom = nom;
        this.adresse = adresse;
        this.pays = pays;
        this.nbre_fourchette = nb_fourchette;
        this.description = description;
      
    }

    public Restaurent(int idrestaurent, String nom, String adresse, String pays, int nb_fourchette, String description) {
        this.id = idrestaurent;
        this.nom = nom;
        this.adresse = adresse;
        this.pays = pays;
        this.nbre_fourchette = nb_fourchette;
        this.description = description;
        this.evaluation=0;
    }

    public int getIdrestaurent() {
        return id;
    }

    public String getNom() {
        return nom;
    }

    public String getAdresse() {
        return adresse;
    }

    public String getPays() {
        return pays;
    }

    public int getNbre_fourchette() {
        return nbre_fourchette;
    }

    public String getDescription() {
        return description;
    }

    public float getEvaluation() {
        return evaluation;
    }

    public void setIdrestaurent(int idrestaurent) {
        this.id = idrestaurent;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public void setPays(String pays) {
        this.pays = pays;
    }

    public void setNbre_fourchette(int nb_fourchette) {
        this.nbre_fourchette = nb_fourchette;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public void setEvaluation(int evaluation) {
        this.evaluation = evaluation;
    }

    @Override
    public String toString() {
        return "Restaurant{" + "idrestaurent=" + id + ", nom=" + nom + ", adresse=" + adresse + ", pays=" + pays + ", nb_fourchette=" + nbre_fourchette + ", description=" + description + ", evaluation=" + evaluation + '}';
    }
    
    
}
