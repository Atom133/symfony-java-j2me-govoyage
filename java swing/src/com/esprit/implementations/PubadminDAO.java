/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;

import com.esprit.dao.entities.Pubadmin;
import com.esprit.dao.entities.Fos_user;
import com.esprit.dao.interfaces.Ipubadmin;
import com.esprit.dao.techniques.Myconnexion;
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
 * @author mehdikarray
 */
public class PubadminDAO implements Ipubadmin{
Connection cnx;
    public PubadminDAO() {
        cnx=Myconnexion.getInstance();
    }

    
    
    

    @Override
    public void deletePubadmmin(int id) {
           String requete="delete from publication where id="+id;
       Statement st;
        try {
            st = cnx.createStatement();
              st.executeUpdate(requete);
              System.out.println("suppression réussie");
        } catch (SQLException ex) {
            Logger.getLogger(UtilisateurDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void validerPubadmin(Pubadmin pubadmin) {
         String requette2="update publication set publie=1 where id=?";
     
         
              try {  PreparedStatement pst2 = cnx.prepareStatement(requette2);
                pst2.setInt(1,pubadmin.getIdpub());
      
      pst2.executeUpdate();
      System.out.println("publication valider");
          } catch (SQLException ex) {
              Logger.getLogger(UtilisateurDAO.class.getName()).log(Level.SEVERE, null, ex);
          }
    }

    

    @Override
    public List<Pubadmin> DisplayPubadmin() {
        List<Pubadmin> listePubadmin =new ArrayList<>();
          
  	try {
//            String requette= "SELECT idpublication ,type_publication ,description_experience,description_evenement,description_recommandation FROM publication where publie=0";
                  String requette= "SELECT * FROM publication where publie=0";
            Statement st = cnx.createStatement(); 
                  ResultSet rs= st.executeQuery(requette);
                 
              while(rs.next()){
               Pubadmin d = new Pubadmin();
                d.setIdpub(rs.getInt(1));
                d.setTypepub(rs.getString(2));
                d.setDescex(rs.getString(10));
                d.setDesceven(rs.getString(14));
                d.setDescrec(rs.getString(17));
                listePubadmin.add(d);
               
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
                 
		   return listePubadmin;
    }

    @Override
    public Pubadmin findById(int id) {
        Pubadmin d = new Pubadmin();
          String requette= "SELECT id ,type_publication ,description_experience,description_evenement,description_recommandation FROM publication where id="+id;
  	try {
                  Statement st = cnx.createStatement(); 
                  ResultSet rs= st.executeQuery(requette);
                 
              while(rs.next()){
               
                d.setIdpub(rs.getInt(1));
                d.setTypepub(rs.getString(2));
                d.setDescex(rs.getString(3));
                d.setDesceven(rs.getString(4));
                d.setDescrec(rs.getString(5));
               
               
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
                 
		   return d;
    }
    
}
