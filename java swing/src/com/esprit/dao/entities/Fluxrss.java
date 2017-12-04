/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

/**
 *
 * @author mehdikarray
 */
public class Fluxrss {
    private String titreflux;
    private String linkflux;
    private String descriptionflux;
    private String titreitem;
    private String linkitem;
    private String descriptionitem;

    public Fluxrss() {
    }

    public Fluxrss(String titreflux, String linkflux, String descriptionflux, String titreitem, String linkitem, String descriptionitem) {
        this.titreflux = titreflux;
        this.linkflux = linkflux;
        this.descriptionflux = descriptionflux;
        this.titreitem = titreitem;
        this.linkitem = linkitem;
        this.descriptionitem = descriptionitem;
    }

    public String getTitreflux() {
        return titreflux;
    }

    public String getLinkflux() {
        return linkflux;
    }

    public String getDescriptionflux() {
        return descriptionflux;
    }

    public String getTitreitem() {
        return titreitem;
    }

    public String getLinkitem() {
        return linkitem;
    }

    public String getDescriptionitem() {
        return descriptionitem;
    }

    public void setTitreflux(String titreflux) {
        this.titreflux = titreflux;
    }

    public void setLinkflux(String linkflux) {
        this.linkflux = linkflux;
    }

    public void setDescriptionflux(String descriptionflux) {
        this.descriptionflux = descriptionflux;
    }

    public void setTitreitem(String titreitem) {
        this.titreitem = titreitem;
    }

    public void setLinkitem(String linkitem) {
        this.linkitem = linkitem;
    }

    public void setDescriptionitem(String descriptionitem) {
        this.descriptionitem = descriptionitem;
    }
    
}
