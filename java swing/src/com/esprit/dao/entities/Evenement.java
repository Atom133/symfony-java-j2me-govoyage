/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

import java.util.Date;

/**
 *
 * @author islem_nawara
 */
public class Evenement extends Publication {
    
    private String lieu ;
    private  String date;
    private String detail;
    private String heur;


    public Evenement(){
       
    }

    public Evenement(String lieu, String date, String detail,Fos_user user) {
        super("evenement", user);
        this.lieu = lieu;
        this.date = date;
        this.detail = detail;
    }
    



    public Evenement(String lieu, String date, String detail, String type_publication, int publie, Fos_user user) {
        super("evenement",user);
        this.lieu = lieu;
        this.date = date;
        this.detail = detail;
    }
    

    public String getLieu() {
        return lieu;
    }

    public String getDate() {
        return date;
    }

    public String getDetail() {
        return detail;
    }

    public void setLieu(String lieu) {
        this.lieu = lieu;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public void setDetail(String detail) {
        this.detail = detail;
    }

    public String getHeur() {
        return heur;
    }

    public void setHeur(String heur) {
        this.heur = heur;
    }
  
    
 

   
      

    
    @Override
    public String toString() {
        return "evenement{" + "id=" + super.id + ", typePublication=" + super.type_publication + ", date="+ date+", user=" +super.user+",lieu= "+lieu
                +"date=" +date+ "detail="+ detail+'}';
    }
    
    
    
}
