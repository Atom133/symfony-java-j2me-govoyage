package com.esprit.dao.techniques;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Sony
 */
public class Myconnexion {
    String url="jdbc:mysql://localhost:3306/bestrip";
    String login="root";
    String pwd="root";
  
    private static Connection instance;
    private Myconnexion() {
        try {
    Class.forName("com.mysql.jdbc.Driver");
            try {
               instance =DriverManager.getConnection(url, login, pwd);
                 System.out.println("conx établie");
            } catch (SQLException ex) {
                System.out.println(ex.getMessage());
            }
           
    } catch (ClassNotFoundException ex) {
             System.out.println(ex.getMessage());
        }
   
        
        
    }
    public static Connection getInstance(){
    if(instance==null)
    new Myconnexion();
    return instance;
    }
    
    
}
