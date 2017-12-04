/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

/**
 *
 * @author mehdikarray
 */
public class Pubadmin {
    String typepub;
    int idpub;
    String descex;
    String descrec;
    String desceven;

    public Pubadmin(int idpub,String typepub,String descex,String desceven,String descrec) {
        this.typepub = typepub;
        this.idpub =   idpub;
        this.descex =  descex;
        this.desceven= desceven;
        this.descrec= descrec;
    }

    public String getDescex() {
        return descex;
    }

    public void setDescex(String descex) {
        this.descex = descex;
    }

    public String getDescrec() {
        return descrec;
    }

    public void setDescrec(String descrec) {
        this.descrec = descrec;
    }

    public String getDesceven() {
        return desceven;
    }

    public void setDesceven(String desceven) {
        this.desceven = desceven;
    }

    public Pubadmin() {
    }

    public String getTypepub() {
        return typepub;
    }

    public void setTypepub(String typepub) {
        this.typepub = typepub;
    }

    public int getIdpub() {
        return idpub;
    }

    public void setIdpub(int idpub) {
        this.idpub = idpub;
    }

   
    
}
