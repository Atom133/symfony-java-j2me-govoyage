/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Entities;

/**
 *
 * @author mohamed
 */
public class Hotel {
    
    private int id;
    private String nom;
    private String ville;
    private int etoiles;
    private String adresse;
    private Double prix_nuit;
    private String description;

    public Hotel() {
    }
    
    

    public Hotel(int id, String nom, String ville, int etoiles, String adresse, Double prix_nuit, String description) {
        this.id = id;
        this.nom = nom;
        this.ville = ville;
        this.etoiles = etoiles;
        this.adresse = adresse;
        this.prix_nuit = prix_nuit;
        this.description = description;
    }

    public Hotel(String nom, String ville, int etoiles, String adresse, Double prix_nuit, String description) {
        this.nom = nom;
        this.ville = ville;
        this.etoiles = etoiles;
        this.adresse = adresse;
        this.prix_nuit = prix_nuit;
        this.description = description;
    }
    
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getVille() {
        return ville;
    }

    public void setVille(String ville) {
        this.ville = ville;
    }

    public int getEtoiles() {
        return etoiles;
    }

    public void setEtoiles(int etoiles) {
        this.etoiles = etoiles;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public Double getPrix_nuit() {
        return prix_nuit;
    }

    public void setPrix_nuit(Double prix_nuit) {
        this.prix_nuit = prix_nuit;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }
    
    
    
}
