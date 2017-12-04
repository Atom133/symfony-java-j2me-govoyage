/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

import java.util.ArrayList;
import java.util.Date;
import java.util.List;

/**
 *
 * @author Amina
 */
public class Guide {
    
    
    private int id;
    private String Titre;
    List<Activite> list_acts;

    
    public Guide() {
    }

    public Guide(int id, String Titre) {
        this.id = id;
        this.Titre = Titre;
             list_acts= new ArrayList<> ();

    }

    public void setId(int id) {
        this.id = id;
    }

    public int getId() {
        return id;
    }

   

    public String getTitre() {
        return Titre;
    }

    public void setTitre(String Titre) {
        this.Titre = Titre;
    }

    @Override
    public String toString() {
        return "Guide{" + "id=" + id + ", Titre=" + Titre + ", list_acts=" + list_acts + '}';
    }
    

    
    
}