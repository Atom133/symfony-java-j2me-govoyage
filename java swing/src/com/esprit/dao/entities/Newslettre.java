/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

/**
 *
 * @author mehdikarray
 */
public class Newslettre {
    private int id_newslettre;
    private String date;
    private String texte;
    private String titre;

    public Newslettre() {
    }

    public Newslettre(int id_newslettre, String date, String texte , String titre ) {
        this.id_newslettre = id_newslettre;
        this.date = date;
        this.texte = texte;
        this.titre=titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getTitre() {
        return titre;
    }

    public int getId_newslettre() {
        return id_newslettre;
    }

    public String getDate() {
        return date;
    }

    public String getTexte() {
        return texte;
    }

    public void setId_newslettre(int id_newslettre) {
        this.id_newslettre = id_newslettre;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public void setTexte(String texte) {
        this.texte = texte;
    }

    @Override
    public String toString() {
        return "newslettre{" + "id_newslettre=" + id_newslettre + ", date=" + date + ", texte=" + texte + '}';
    }
    
}
