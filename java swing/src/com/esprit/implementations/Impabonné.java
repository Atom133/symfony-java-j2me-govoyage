/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;


import com.esprit.dao.entities.Abonné;
import com.esprit.dao.interfaces.Iabonné;
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
public class Impabonné implements Iabonné{
Connection cnx;
public Impabonné(){
    cnx=Myconnexion.getInstance();
    
}
 
    @Override
    public void insertabonné(Abonné abon) {
       String requette="Insert into abonne(mail) value (?)";
        try {
            PreparedStatement pst=cnx.prepareStatement(requette);
            pst.setString(1,abon.getMail_abonné());
            pst.executeUpdate();
            System.out.println("insertion reussi");
        } catch (SQLException ex) {
            Logger.getLogger(Impabonné.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void delateabonné(int id) {
       String requette="DELETE FROM abonne WHERE id="+id;
        try {
            Statement st=cnx.createStatement();
            st.executeUpdate(requette);
            System.out.println("suppression reussi");
        } catch (SQLException ex) {
            Logger.getLogger(Impabonné.class.getName()).log(Level.SEVERE, null, ex);
        }
       
    }

    @Override
    public void updateabonné(Abonné a) {
        String requette="update abonne set mail="+a.getMail_abonné();
        try {
            Statement st=cnx.createStatement();
            st.executeUpdate(requette);
            System.out.println("update reussi");
        } catch (SQLException ex) {
            Logger.getLogger(Impabonné.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public Abonné findabonéById(int id) {
       Abonné d = new Abonné();
       try{
       String requette ="Select* from abonne where id="+id;
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {
            d.setId_abonné(rs.getInt(1));
            d.setMail_abonné(rs.getString(2));
            
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return d;
    }

    @Override
    public Abonné findabonnéBymail(String mail) {
      Abonné d= new Abonné();
       try{
       String requette ="Select* from abonne where mail="+mail;
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {
            d.setId_abonné(rs.getInt(1));
            d.setMail_abonné(rs.getString(2));
            
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return d;
      
    }

    @Override
    public List<Abonné> DisplayAllabonné() {
       List <Abonné> listabonné = new ArrayList<Abonné>();
       try{
       String requette ="Select* from abonne";
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {Abonné d =new Abonné();
            d.setId_abonné(rs.getInt(1));
            d.setMail_abonné(rs.getString(2));
            listabonné.add(d);
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return listabonné;
    }

    @Override
    public List<Abonné> allmail() {
        List <Abonné> listabonné = new ArrayList<Abonné>();
       try{
       String requette ="Select mail from abonne";
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {Abonné d =new Abonné();
         
            d.setMail_abonné(rs.getString(1));
            listabonné.add(d);
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return listabonné;
    }

   
    
}
