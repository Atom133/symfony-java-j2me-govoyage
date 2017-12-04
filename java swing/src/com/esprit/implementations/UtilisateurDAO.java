/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;

import com.esprit.dao.entities.Fos_user;
import com.esprit.dao.interfaces.IUtilisateur;
import com.esprit.dao.techniques.*;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author islem_nawara
 */
public class UtilisateurDAO implements IUtilisateur{
     Connection cnx;

    public UtilisateurDAO() {
         cnx=Myconnexion.getInstance();
    }
   
    @Override
    public void insertUtilisateur(Fos_user utilisateur) {
          String requete="insert INTO fos_user(username,username_canonical,email,email_canonical,password,enabled,salt,locked,expired,roles,credentials_expired) values (?,?,?,?,?,?,?,?,?,?,?)";
        try {
            
            PreparedStatement pst= cnx.prepareStatement(requete);
             pst.setString(1, utilisateur.getUsername());
             pst.setString(2, utilisateur.getUsername_canonical());
             pst.setString(3, utilisateur.getEmail());
             pst.setString(4, utilisateur.getEmail_canonical());
             pst.setString(5, utilisateur.getMdp());
             pst.setInt(6, utilisateur.getEnabled());
             pst.setString(7, utilisateur.getSalt());
             pst.setInt(8, utilisateur.getLocked());
             pst.setInt(9, utilisateur.getExpired());
             pst.setString(10, utilisateur.getRoles());
             pst.setInt(11, utilisateur.getCredentials_expired());
             
  
            
          
             pst.executeUpdate();
            System.out.println("Insertion réussie");
        } catch (SQLException ex) {
            Logger.getLogger(UtilisateurDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
     @Override
    public void deleteUtilisateur(int id) {
          String requete="delete from fos_user where id="+id;
       Statement st;
        try {
            st = cnx.createStatement();
              st.executeUpdate(requete);
              System.out.println("suppression réussie");
        } catch (SQLException ex) {
            Logger.getLogger(UtilisateurDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
     public void modifierUtilisateur(Fos_user utilisateur) {
          String requette2="update fos_user set username=?,password=? where id=?";
     
         
              try {  PreparedStatement pst2 = cnx.prepareStatement(requette2);
               
      pst2.setString(1,utilisateur.getUsername());
      pst2.setString(2,utilisateur.getMdp());

        
      pst2.executeUpdate();
      System.out.println("modification reussie");
          } catch (SQLException ex) {
              Logger.getLogger(UtilisateurDAO.class.getName()).log(Level.SEVERE, null, ex);
          } 
    }

    
    @Override
  public Fos_user findById(int id) {
              Fos_user d = new Fos_user(); 
          String requette= "SELECT * FROM fos_user WHERE  id = " + id;
  	try {
                  Statement st = cnx.createStatement(); 
                 ResultSet rs= st.executeQuery(requette);
              while(rs.next()){
               
                d.setId(rs.getInt(1));
                d.setUsername(rs.getString(2));
                d.setUsername_canonical(rs.getString(2));
                d.setEmail(rs.getString(4));
                d.setMdp(rs.getString(8));
               
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
                 
		   return d;

	}
    

   
     
    


   
    
 
    

     @Override
     public List<Fos_user> displayAllUtilisateur() {
           List<Fos_user> listeUtilisateur =new ArrayList<>();
        try {
            
            
            String requete="SELECT * FROM fos_user";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            
            while(rs.next()){
                Fos_user res= new Fos_user();
                res.setId(rs.getInt(1));
                res.setUsername(rs.getString(2));
               
                res.setEmail(rs.getString(4));
                listeUtilisateur.add(res);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeUtilisateur;
    }
     

   
     @Override
     public  void bloquerUtilisateur(Fos_user utilisateur){
      String requette2="update fos_user set locked=1 where id=?";
     
         
              try {  PreparedStatement pst2 = cnx.prepareStatement(requette2);
                pst2.setInt(1,utilisateur.getId());
      
      pst2.executeUpdate();
      System.out.println("l'utilisateur  est bloqué");
          } catch (SQLException ex) {
              Logger.getLogger(UtilisateurDAO.class.getName()).log(Level.SEVERE, null, ex);
          }

}

    @Override
    public void debloquerUtilisateur(Fos_user utilisateur) {
       String requette2="update fos_user set locked=0 where id=?";
     
         
              try {  PreparedStatement pst2 = cnx.prepareStatement(requette2);
                pst2.setInt(1,utilisateur.getId());
      
      pst2.executeUpdate();
      System.out.println("l'utilisateur  est debloqué");
          } catch (SQLException ex) {
              Logger.getLogger(UtilisateurDAO.class.getName()).log(Level.SEVERE, null, ex);
          }
    }

    @Override
    public Fos_user findByNom(String nom) {
        throw new UnsupportedOperationException("Not supported yet.");
    }
    

  
  
    
    
}
