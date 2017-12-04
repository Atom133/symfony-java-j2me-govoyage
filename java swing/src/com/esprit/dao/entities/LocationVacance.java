/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

/**
 *
 * @author Sony
 */
public class LocationVacance {
    int id;
    String type;
    String adresse;
    String pays;
    String details;
    float evaluation;

    public LocationVacance() {
    }
       public LocationVacance( String type_location, String adresse,String pays, String details) {
       
        this.type = type_location;
        this.adresse=adresse;
        this.pays = pays;
        this.details = details;
      
    }

   public LocationVacance(int idlocation, String type_location, String adresse,String pays, String details) {
        this.id = idlocation;
        this.type = type_location;
        this.adresse=adresse;
        this.pays = pays;
        this.details = details;
        this.evaluation = 0;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }
    

    public int getIdlocation() {
        return id;
    }

    public void setIdlocation(int idlocation) {
        this.id = idlocation;
    }

    public String getType() {
        return type;
    }

    public void setType(String type_location) {
        this.type = type_location;
    }

    public String getPays() {
        return pays;
    }

    public void setPays(String pays) {
        this.pays = pays;
    }

    public String getDetails() {
        return details;
    }

    public void setDetails(String details) {
        this.details = details;
    }

    public float getEvaluation() {
        return evaluation;
    }

    public void setEvaluation(int evaluation) {
        this.evaluation = evaluation;
    }

    @Override
    public String toString() {
        return "LocationVacance{" + "idlocation=" + id + ", type=" + type + ", adresse=" + adresse + ", pays=" + pays + ", details=" + details + ", evaluation=" + evaluation + '}';
    }

    
    
    
    
}
