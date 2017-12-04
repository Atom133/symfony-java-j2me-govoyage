/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;

import com.esprit.dao.entities.Administrateur;
import com.esprit.dao.interfaces.Iadministrateur;
import com.esprit.dao.techniques.Myconnexion;
import java.io.IOException;
import java.nio.channels.Channel;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import viecili.jrss.generator.RSSFeedGenerator;
import viecili.jrss.generator.RSSFeedGeneratorFactory;
import viecili.jrss.generator.elem.Item;
import viecili.jrss.generator.elem.RSS;
/**
 *
 * @author mehdikarray
 */
public class Impadministrateur implements Iadministrateur  {
    Connection cnx;

    public Impadministrateur() {
        cnx=Myconnexion.getInstance();
    }
    

    @Override
    public void insertadministrateur(Administrateur ad) {
         String requette="Insert into administrateur(login,mdp ) value (?,?)";
        try {
            PreparedStatement pst=cnx.prepareStatement(requette);
            pst.setString(1,ad.getLogin());
            pst.setString(2,ad.getMdp());
            pst.executeUpdate();
            System.out.println("insertion reussi");
        } catch (SQLException ex) {
            Logger.getLogger(Impabonné.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void delateadministrateur(int id) {
        String requette="DELETE FROM administrateur WHERE id="+id;
        try {
            Statement st=cnx.createStatement();
            st.executeUpdate(requette);
            System.out.println("suppression reussi");
        } catch (SQLException ex) {
            Logger.getLogger(Impabonné.class.getName()).log(Level.SEVERE, null, ex);
        }
       
    }

    @Override
    public void updateadministrateur(Administrateur ad) {
         String requette="update administrateur set login="+ad.getLogin()+",mdp="+ad.getMdp();
        try {
            Statement st=cnx.createStatement();
            st.executeUpdate(requette);
            System.out.println("update reussi");
        } catch (SQLException ex) {
            Logger.getLogger(Impabonné.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public Administrateur findadministrateurById(int id) {
         Administrateur d = new Administrateur();
       try{
       String requette ="Select* from administrateur where idadministrateur="+id;
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {
            d.setId_administrateur(rs.getInt(1));
            d.setLogin(rs.getString(2));
            d.setMdp(rs.getString(3));
         
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return d ;
    }

    @Override
    public Administrateur findadministrateurBylogin(String login) {
        Administrateur d = new Administrateur();
       try{
       String requette ="Select* from administrateur where login="+login;
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {
            d.setId_administrateur(rs.getInt(1));
            d.setLogin(rs.getString(2));
            d.setMdp(rs.getString(3));
       
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return d ;
    }

    @Override
    public Administrateur findadministrateurBymdp(String mdp) {
         Administrateur d = new Administrateur();
       try{
       String requette ="Select* from administrateur where mdp="+mdp;
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {
            d.setId_administrateur(rs.getInt(1));
            d.setLogin(rs.getString(2));
            d.setMdp(rs.getString(3));
       
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return d ;
    }

   

    @Override
    public List<Administrateur> DisplayAlladministrateur() {
        List <Administrateur> listAdministrateur = new ArrayList<Administrateur>();
       try{
       String requette ="Select* from administrateur";
       Statement st = cnx.createStatement();
            ResultSet rs=st.executeQuery(requette);
            while(rs.next())
            {Administrateur d =new Administrateur();
            d.setId_administrateur(rs.getInt(1));
            d.setLogin(rs.getString(2));
            d.setMdp(rs.getString(3));
         listAdministrateur.add(d);
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
  
       return listAdministrateur ;
    }
    
    
  
    
    

}
