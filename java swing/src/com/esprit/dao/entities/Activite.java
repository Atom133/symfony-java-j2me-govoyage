/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Amina
 */
public class Activite {
    private int id_activite;
    private String jour;
    private String heure_debut;
    private String heure_fin;
    private String description;
   

    public Activite(int id,String heure_debut, String heure_fin, String jour, String description) {
        this.id_activite=id;
        this.heure_debut = heure_debut;
        this.heure_fin = heure_fin;
        this.jour = jour;
        this.description = description;
    }

    public int getId_activite() {
        return id_activite;
    }

    public void setId_activite(int id_activite) {
        this.id_activite = id_activite;
    }
    

    public Activite() {
    }

    public String getJour() {
        return jour;
    }

    public String getHeure_debut() {
        return heure_debut;
    }

    public String getHeure_fin() {
        return heure_fin;
    }

    public String getDescription() {
        return description;
    }

    public void setJour(String jour) {
        this.jour = jour;
    }

    public void setHeure_debut(String heure_debut) {
        this.heure_debut = heure_debut;
    }

    public void setHeure_fin(String heure_fin) {
        this.heure_fin = heure_fin;
    }

    public void setDescription(String description) {
        this.description = description;
    }

   

}