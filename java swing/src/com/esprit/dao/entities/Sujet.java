/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

import java.util.List;

/**
 *
 * @author Sony
 */
public class Sujet extends Publication{
    int idsujet;
    String sujet;
    Forum f;

    public Sujet(int idsujet, String sujet, String type_publication, Fos_user user) {
        super(type_publication, user);
        this.idsujet = idsujet;
        this.sujet = sujet;
    }

    public int getIdsujet() {
        return idsujet;
    }

    public void setIdsujet(int idsujet) {
        this.idsujet = idsujet;
    }

    public String getSujet() {
        return sujet;
    }

    public void setSujet(String sujet) {
        this.sujet = sujet;
    }

    public List<Media> getList_media() {
        return list_media;
    }

    public void setList_media(List<Media> list_media) {
        this.list_media = list_media;
    }
    
    
}
