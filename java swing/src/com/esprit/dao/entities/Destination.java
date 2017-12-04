/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

/**
 *
 * @author Sony
 */
public class Destination implements Comparable<Destination> {
    int id;
    String pays;
    String description;
    String ville;
    float evalution;

    public Destination() {
    }

    public Destination(int iddestination, String pays, String description, String adresse) {
        this.id = iddestination;
        this.pays = pays;
        this.description = description;
        this.ville = adresse;
        this.evalution = 0;
    }

    public int getIddestination() {
        return id;
    }

    public void setIddestination(int iddestination) {
        this.id = iddestination;
    }

    public String getPays() {
        return pays;
    }

    public void setPays(String pays) {
        this.pays = pays;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getAdresse() {
        return ville;
    }

    public void setAdresse(String adresse) {
        this.ville = adresse;
    }

    public float getEvalution() {
        return evalution;
    }

    public void setEvalution(float evalution) {
        this.evalution = evalution;
    }

    

    @Override
    public String toString() {
        return "Destination{" + "pays=" + pays + ", description=" + description + ", adresse=" +ville + ", evalution=" + evalution + '}';
    }

   
  

    @Override
    public int compareTo(Destination o) {
        float p=o.getEvalution()-this.getEvalution();
        if(p==0)
            return  o.getAdresse().compareTo(this.getAdresse());
         else
       return ((int)p );
    }

  
   

  
    
    
}
