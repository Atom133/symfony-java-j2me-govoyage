/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

/**
 *
 * @author mehdikarray
 */
public class Administrateur {
    private int id_administrateur;
    private String login;
    private String mdp;

    public Administrateur(int id_administrateur, String login, String mdp) {
        this.id_administrateur = id_administrateur;
        this.login = login;
        this.mdp = mdp;
    }

    public Administrateur() {
    }

    public int getId_administrateur() {
        return id_administrateur;
    }

    public String getLogin() {
        return login;
    }

    public String getMdp() {
        return mdp;
    }

    public void setId_administrateur(int id_administrateur) {
        this.id_administrateur = id_administrateur;
    }

    public void setLogin(String login) {
        this.login = login;
    }

    public void setMdp(String mdp) {
        this.mdp = mdp;
    }

    @Override
    public String toString() {
        return "administrteur{" + "id_administrateur=" + id_administrateur + ", login=" + login + ", mdp=" + mdp + '}';
    }


}