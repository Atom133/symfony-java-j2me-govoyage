/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;



import com.esprit.dao.entities.Newslettre;
import com.esprit.dao.interfaces.Inewslettre;
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
public class Impnewslettre implements Inewslettre {
    Connection cnx;

    public Impnewslettre() {
        cnx=Myconnexion.getInstance();
    }
    

    @Override
    public void insertnewslettre(Newslettre ne) {
        String requette="Insert into newslettre(date,texte,titre) value (?,?,?)";
        try {
            PreparedStatement pst=cnx.prepareStatement(requette);
            pst.setString(1,ne.getDate());
            pst.setString(2,ne.getTexte());
            pst.setString(3,ne.getTitre());
            pst.executeUpdate();
            System.out.println("insertion reussi");
        } catch (SQLException ex) {
            Logger.getLogger(Impabonné.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

   

    @Override
    public void delatenewslettre(int id) {
       String requette="DELETE FROM newslettre WHERE idnewslettre="+id;
        try {
            Statement st=cnx.createStatement();
            st.executeUpdate(requette);
            System.out.println("suppression reussi");
        } catch (SQLException ex) {
            Logger.getLogger(Impabonné.class.getName()).log(Level.SEVERE, null, ex);
        }
       
    }

    @Override
    public void updatenewslettre(Newslettre ne) {
         String requette="update newslettre set date="+ne.getDate()+",texte="+ne.getTexte();
        try {
            Statement st=cnx.createStatement();
            st.executeUpdate(requette);
            System.out.println("update reussi");
        } catch (SQLException ex) {
            Logger.getLogger(Impabonné.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public Newslettre findnewslettreById(int id) {
         Newslettre d = new Newslettre();
       try{
       String requette ="Select* from newslettre where idnewslettre="+id;
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {
            d.setId_newslettre(rs.getInt(1));
            d.setDate(rs.getString(2));
            d.setTexte(rs.getString(3));
         
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
      return d ;
    }

    @Override
    public Newslettre findnewslettreBydate(String date) {
         Newslettre d = new Newslettre();
       try{
       String requette ="Select* from newslettre where date="+date;
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {
            d.setId_newslettre(rs.getInt(1));
            d.setDate(rs.getString(2));
            d.setTexte(rs.getString(3));
         
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return d ;
    }

    @Override
    public Newslettre findnewslettreBytexte(String texte) {
         Newslettre d = new Newslettre();
       try{
       String requette ="Select* from newslettre where texte="+texte;
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {
            d.setId_newslettre(rs.getInt(1));
            d.setDate(rs.getString(2));
            d.setTexte(rs.getString(3));
         
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return d ;
    
    }

    @Override
    public List<Newslettre> DisplayAllnewslettre() {
         List <Newslettre> listNewslettre = new ArrayList<Newslettre>();
       try{
       String requette ="Select* from newslettre";
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {Newslettre d=new Newslettre();
            d.setId_newslettre(rs.getInt(1));
            d.setDate(rs.getString(2));
            d.setTexte(rs.getString(3));
         listNewslettre.add(d);
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return listNewslettre ;
    }
    
}
