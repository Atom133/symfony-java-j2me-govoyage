/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique;

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
public class Dao {
    Connection cnx;
    public Dao()
    {
    cnx=Myconnexion.getInstance();
    }
    public ResultSet executeQuery(String req){
      Statement st;
      ResultSet rs=null;
      
        try {
            st= cnx.createStatement();
              rs= st.executeQuery(req);
        } catch (SQLException ex) {
            Logger.getLogger(Dao.class.getName()).log(Level.SEVERE, null, ex);
        }
        return rs;
    }
    
}
