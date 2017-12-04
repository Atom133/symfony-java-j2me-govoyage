/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Entities;

/**
 *
 * @author SASSOU
 */
public class Vol {
        int id;
    String dateDepart;
    String dateArrivee;

   


    public Vol( String dateDepart, String dateArrivee, String heureDepart, String heureArrivee, String nbrePassagers, String companie, String prixBillet, String classeBillet, String aereportDepart, String aeroportArrivee) {
        //this.id = id;
        this.dateDepart = dateDepart;
        this.dateArrivee = dateArrivee;
        this.heureDepart = heureDepart;
        this.heureArrivee = heureArrivee;
        this.nbrePassagers = nbrePassagers;
        this.companie = companie;
        this.prixBillet = prixBillet;
        this.classeBillet = classeBillet;
        this.aereportDepart = aereportDepart;
        this.aeroportArrivee = aeroportArrivee;
    }
    
    String heureDepart;
    String heureArrivee;
    String nbrePassagers;

    public Vol() {
        
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getDateDepart() {
        return dateDepart;
    }

    public void setDateDepart(String dateDepart) {
        this.dateDepart = dateDepart;
    }

    public String getDateArrivee() {
        return dateArrivee;
    }

    public void setDateArrivee(String dateArrivee) {
        this.dateArrivee = dateArrivee;
    }

    public String getHeureDepart() {
        return heureDepart;
    }

    public void setHeureDepart(String heureDepart) {
        this.heureDepart = heureDepart;
    }

    public String getHeureArrivee() {
        return heureArrivee;
    }

    public void setHeureArrivee(String heureArrivee) {
        this.heureArrivee = heureArrivee;
    }

    public String getNbrePassagers() {
        return nbrePassagers;
    }

    public void setNbrePassagers(String nbrePassagers) {
        this.nbrePassagers = nbrePassagers;
    }

    public String getCompanie() {
        return companie;
    }

    public void setCompanie(String companie) {
        this.companie = companie;
    }

    public String getPrixBillet() {
        return prixBillet;
    }

    public void setPrixBillet(String prixBillet) {
        this.prixBillet = prixBillet;
    }

    public String getClasseBillet() {
        return classeBillet;
    }

    public void setClasseBillet(String classeBillet) {
        this.classeBillet = classeBillet;
    }

    public String getAereportDepart() {
        return aereportDepart;
    }

    public void setArroportDepart(String aereportDepart) {
        this.aereportDepart = aereportDepart;
    }

    public String getAeroportArrivee() {
        return aeroportArrivee;
    }

    public void setAeroportArrivee(String aeroportArrivee) {
        this.aeroportArrivee = aeroportArrivee;
    }
    String companie;
    String prixBillet;
    String classeBillet;
    String aereportDepart;
    String aeroportArrivee;
    
    
}
