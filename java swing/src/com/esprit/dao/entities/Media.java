/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

/**
 *
 * @author Sony
 */
public class Media {
   private  int idmedia;
    private String type;
    private String url;

    public Media(int idmedia, String type, String url) {
        this.idmedia = idmedia;
        this.type = type;
        this.url = url;
    }

    public Media() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public int getIdmedia() {
        return idmedia;
    }

    public String getType() {
        return type;
    }

    public String getUrl() {
        return url;
    }

    public void setIdmedia(int idmedia) {
        this.idmedia = idmedia;
    }

    public void setType(String type) {
        this.type = type;
    }

    public void setUrl(String url) {
        this.url = url;
    }
    
    
    
}
