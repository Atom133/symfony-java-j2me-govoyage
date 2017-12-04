/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.esprit.dao.entities;

/**
 *
 * @author DELL
 */
public class Hotel {
 private   int id;
 private    String nom;
  private   String adresse;
  private   int nb_etoile;
  private   String pays;
  private   String description;
   private  float evaluation;

    public Hotel() {
    }

    public Hotel(int idhotel, String nom, String adresse, int nb_etoile, String pays, String description, float evaluation) {
        this.id = idhotel;
        this.nom = nom;
        this.adresse = adresse;
        this.nb_etoile = nb_etoile;
        this.pays = pays;
        this.description = description;
        this.evaluation = evaluation;
    }

    public Hotel(int idhotel, String nom, String adresse, int nb_etoile, String pays, String description) {
        this.id = idhotel;
        this.nom = nom;
        this.adresse = adresse;
        this.nb_etoile = nb_etoile;
        this.pays = pays;
        this.description = description;
    }

    public int getIdhotel() {
        return id;
    }

    public void setIdhotel(int idhotel) {
        this.id = idhotel;
    }

    public int getNb_etoile() {
        return nb_etoile;
    }

    public void setNb_etoile(int nb_etoile) {
        this.nb_etoile = nb_etoile;
    }

    public String getPays() {
        return pays;
    }

    public void setPays(String pays) {
        this.pays = pays;
    }

    @Override
    public String toString() {
        return "Hotel{" + "idhotel=" + id + ", nom=" + nom + ", adresse=" + adresse + ", nb_etoile=" + nb_etoile + ", pays=" + pays + ", description=" + description + ", evaluation=" + evaluation + '}';
    }

    

    
   


   

    public int getIdHotel() {
        return id;
    }

    public void setIdHotel(int idHotel) {
        this.id = idHotel;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public int getNbetoile() {
        return nb_etoile;
    }

    public void setNbetoile(int nbetoile) {
        this.nb_etoile = nbetoile;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public float getEvaluation() {
        return evaluation;
    }

    public void setEvaluation(int evaluation) {
        this.evaluation = evaluation;
    }
    
    
}
