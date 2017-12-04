/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Entities;

/**
 *
 * @author damine
 */
public class Personne {
    private int id;
    private String nom;
    private String prenom;
    private String username;
    private String password;
    private String mail;
    
    public static int idUser;
    public static String F_Name;
    public static String L_Name;
    public static String role;

    public Personne() {
    }

    public Personne(int id) {
        this.id = id;
    }
    

    public Personne(String nom, String prenom, String username, String password, String mail) {
        this.nom = nom;
        this.prenom = prenom;
        this.username = username;
        this.password = password;
        this.mail = mail;
    }

    
    
    public Personne(int id, String nom, String prenom, String username, String password, String mail) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.username = username;
        this.password = password;
        this.mail = mail;
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

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getMail() {
        return mail;
    }

    public void setMail(String mail) {
        this.mail = mail;
    }
    
    
    public static int getIdUser() {
        return idUser;
    }

    public static void setIdUser(int idUser) {
        Personne.idUser = idUser;
    }

    public static String getF_Name() {
        return F_Name;
    }

    public static void setF_Name(String F_Name) {
        Personne.F_Name = F_Name;
    }

    public static String getL_Name() {
        return L_Name;
    }

    public static void setL_Name(String L_Name) {
        Personne.L_Name = L_Name;
    }

    public static String getRole() {
        return role;
    }

    public static void setRole(String role) {
        Personne.role = role;
    }


    
}
