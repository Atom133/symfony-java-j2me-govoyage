/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

import java.util.Date;

/**
 *
 * @author Sony
 */
public class Experience extends Publication{
    int id_experience;
    String destination_experience;
    String description_experience;
    String type_exeprience;
    String date_arriv;
    String date_depart;

    public Experience() {
    }
    

   


   
    
    public Experience( int id,String destination_experience, String description_experience, String type_exeprience, String date_arriv,String date_depart, Fos_user user) {
        super("Experience", user);
        this.id_experience=id;
        this.destination_experience = destination_experience;
        this.description_experience = description_experience;
        this.type_exeprience = type_exeprience;
        this.date_arriv = date_arriv;
        this.date_depart = date_depart;
    }

     
      
      
    

    public int getId_experience() {
        return id_experience;
    }

    public void setId_experience(int id_experience) {
        this.id_experience = id_experience;
    }

   

    

    public String getDestination_experience() {
        return destination_experience;
    }

    public void setDestination_experience(String destination_experience) {
        this.destination_experience = destination_experience;
    }

    public String getDescription_experience() {
        return description_experience;
    }

    public void setDescription_experience(String description_experience) {
        this.description_experience = description_experience;
    }

    public String getType_exeprience() {
        return type_exeprience;
    }

    public void setType_exeprience(String type_exeprience) {
        this.type_exeprience = type_exeprience;
    }

    public String getDate_arriv() {
        return date_arriv;
    }

    public String getDate_depart() {
        return date_depart;
    }

    public void setDate_arriv(String date_arriv) {
        this.date_arriv = date_arriv;
    }

    public void setDate_depart(String date_depart) {
        this.date_depart = date_depart;
    }

    

    @Override

 
    public String toString() {
        return super.toString()+"Experience{" + "id_experience=" + id_experience + ", destination_experience=" + destination_experience + ", description_experience=" + description_experience + ", type_exeprience=" + type_exeprience + ", date_arriv=" + date_arriv + ", date_depart=" + date_depart + '}';
    }
    

  


    
    
    
    
}
