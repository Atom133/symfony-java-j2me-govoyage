/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;

import com.esprit.dao.entities.Administrateur;
import com.esprit.dao.entities.Fos_user;
import com.esprit.dao.techniques.*;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author islem_nawara
 */
public class loginDAO {
     protected String Login;
    protected String Pass;
    private Connection cnx;

    public loginDAO(String Login, String Pass) {
        this.Login = Login;
        this.Pass = Pass;
        this.cnx = Myconnexion.getInstance();
    }
     public Fos_user verifier() {
        Fos_user u=null ;
        try {

            String requete = "SELECT * FROM fos_user WHERE locked =0 and username='" + this.Login+"' and password='"+this.Pass+"'";
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(requete);
            while (rst.next()) {
                u= new Fos_user();
                u.setId(rst.getInt("id"));
               
                u.setUsername(rst.getString("username"));
                u.setMdp(rst.getString("password"));
            
                u.setLocked(rst.getInt("locked"));
              

            }
        } catch (SQLException ex) {
            Logger.getLogger(Myconnexion.class.getName()).log(Level.SEVERE, null, ex);
        }
        return u;
    }
      public Administrateur verifieradmin() {
        Administrateur a=null ;
        try {

            String requete = "SELECT * FROM administrateur WHERE (login='" + this.Login+"') and (mot_de_passe='"+this.Pass+"')";
            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(requete);
            while (rst.next()) {
                a= new Administrateur();
                a.setId_administrateur(rst.getInt("id"));
                
                a.setLogin(rst.getString("login"));
                a.setMdp(rst.getString("mot_de_passe"));
              
              

            }
        } catch (SQLException ex) {
            Logger.getLogger(Myconnexion.class.getName()).log(Level.SEVERE, null, ex);
        }
        return a;
    }
}
