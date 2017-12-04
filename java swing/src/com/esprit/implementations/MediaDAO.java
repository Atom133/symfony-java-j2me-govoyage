/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;

import com.esprit.dao.entities.Media;
import com.esprit.dao.interfaces.IMediaDAO;
import com.esprit.dao.techniques.Myconnexion;
//import com.esprit.dao.technique.MyConnection;
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
 * @author Amina
 */
public class MediaDAO implements IMediaDAO {
    Connection cnx;

    public MediaDAO() {
        cnx=Myconnexion.getInstance();
    }

    @Override
    public void insertMedia(Media md) {
        String requete = "insert into media(type,url) values (?,?)";
        try {

            PreparedStatement pst = cnx.prepareStatement(requete);

            pst.setString(1, md.getType());
            pst.setString(2, md.getUrl());
            pst.executeUpdate();
            System.out.println("Insertion réussie");
        } catch (SQLException ex) {
            Logger.getLogger(MediaDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void deleteMedia(int id) {
        String requete = "delete from media where idmedia=" + id;
        Statement st;
        try {
            st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("suppression réussie");
        } catch (SQLException ex) {
            Logger.getLogger(MediaDAO.class.getName()).log(Level.SEVERE, null, ex);
        }

    }


    
    public List<Media> displayAllMedia() {
        List<Media> listeMd = new ArrayList<Media>();
        try {

            String requete = "SELECT * FROM media";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);

            while (rs.next()) {
                Media md = new Media();

                md.setType(rs.getString("type"));
                md.setUrl(rs.getString("url"));
                listeMd.add(md);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeMd;
    }
 
    @Override
    public void modifierMedia(Media md) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Media findById(int id) {
          Media m=new Media();
          try {
          
            String req= "select * from media where idmedia="+id;
            Statement st=cnx.createStatement();
            ResultSet rs=st.executeQuery(req);
            while (rs.next()){
            m.setType(rs.getString(2));
            m.setUrl(rs.getString(3));
          
           }
                    } catch (SQLException ex) {
            Logger.getLogger(MediaDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
         return m;        
    }
        
    

    @Override
    public Media findByUrl(String url) {
          Media m=new Media();
          try {
          
            String req= "select * from depot where url="+url;
            Statement st=cnx.createStatement();
            ResultSet rs=st.executeQuery(req);
            while (rs.next()){
            
            m.setType(rs.getString(2));
            m.setUrl(rs.getString(3));
          
           }
            
        } catch (SQLException ex) {
            Logger.getLogger(MediaDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
         return m;        
    }
               
    }
    
    

