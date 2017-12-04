/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

import java.sql.Date;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Sony
 */
public class Publication {
    int id;
    
    String type_publication;
    int publie;
   Fos_user user;
   List<Media> list_media;

    public int getIdpublication() {
        return id;
    }

    public void setIdpublication(int idpublication) {
        this.id = idpublication;
    }

    public String getType_publication() {
        return type_publication;
    }

    public void setType_publication(String type_publication) {
        this.type_publication = type_publication;
    }

    public int getPublie() {
        return publie;
    }

    public void setPublie(int publie) {
        this.publie = publie;
    }

    public Fos_user getUser() {
        return user;
    }

    public void setUser(Fos_user user) {
        this.user = user;
    }

    public List<Media> getList_media() {
        return list_media;
    }

    public void setList_media(List<Media> list_media) {
        this.list_media = list_media;
    }
 
    public Publication() {
    }
   
    public Publication(String type_publication, Fos_user user) {
        this.type_publication = type_publication;
        this.publie =0;
        this.user = user;
        List<Media> list_media=new ArrayList<>();
    }

    @Override
    public String toString() {
        return "Publication{" + "idpublication=" + id + ", type_publication=" + type_publication + ", publie=" + publie + ", user=" + user + ", list_media=" + list_media + '}';
    }

   
  
   
    
}
