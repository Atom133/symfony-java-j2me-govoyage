
package com.esprit.dao.entities;

/**
 *
 * @author mehdikarray
 */
public class Abonné {
    private int id_abonné;
    private String mail_abonné;
    
    public Abonné() {
    }

    public Abonné(int id_abonné, String mail_abonné) {
        this.id_abonné= id_abonné;
        this.mail_abonné = mail_abonné;
    }

    public int getId_abonné() {
        return id_abonné;
    }

    public String getMail_abonné() {
        return mail_abonné;
    }

    public void setId_abonné(int id_abonné) {
        this.id_abonné = id_abonné;
    }

    public void setMail_abonné(String mail_abonné) {
        this.mail_abonné = mail_abonné;
    }

    @Override
    public String toString() {
        return "abonné{" + "id_abonn\u00e9=" + id_abonné + ", mail_abonn\u00e9=" + mail_abonné + '}';
    }

   
}
