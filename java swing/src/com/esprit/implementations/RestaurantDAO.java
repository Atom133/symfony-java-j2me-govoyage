/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.esprit.implementations;
import com.esprit.dao.interfaces.*;
import com.esprit.dao.entities.Restaurent;
import com.esprit.dao.interfaces.IRestaurantlDAO;
import com.esprit.dao.interfaces.IRestaurantlDAO;
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
 * @author DELL
 */
public class RestaurantDAO implements IRestaurantlDAO {
Connection cnx;

    public RestaurantDAO() {
         cnx=Myconnexion.getInstance();
    }

    @Override
    public void insert(Restaurent restaurant) {
            String requete="insert into restaurant(nom,adresse,pays,nbre_fourchette,description) values (?,?,?,?,?)";
        try {
            
            PreparedStatement pst= cnx.prepareStatement(requete);
             pst.setString(1,  restaurant.getNom());
              pst.setString(2,  restaurant.getAdresse());
               pst.setString(3,  restaurant.getPays());
                pst.setInt(4, restaurant.getNbre_fourchette());
                pst.setString(5, restaurant.getDescription());
             pst.executeUpdate();
            System.out.println("Insertion réussie");
        } catch (SQLException ex) {
            Logger.getLogger(HotelDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void deleteRestaurant(int id) {
           String requete="delete from restaurant where idrestaurent="+id;
       Statement st;
        try {
            st = cnx.createStatement();
              st.executeUpdate(requete);
              System.out.println("suppression réussie");
        } catch (SQLException ex) {
            Logger.getLogger(HotelDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void modifierRestaurant(Restaurent restaurant) {
              String requette2="update restaurant set nom=?,adresse=?,pays=?,nbre_fourchette=?,description=? where idrestaurent=?";
     
         
              try {  PreparedStatement pst2 = cnx.prepareStatement(requette2);
                pst2.setString(1,restaurant.getNom());
      pst2.setString(2,restaurant.getAdresse());
      pst2.setString(3,restaurant.getPays());
        pst2.setInt(4,restaurant.getNbre_fourchette());
      pst2.setString(5,restaurant.getDescription());
       pst2.setInt(6,restaurant.getIdrestaurent());
      pst2.executeUpdate();
      System.out.println("modification reussie");
          } catch (SQLException ex) {
              Logger.getLogger(HotelDAO.class.getName()).log(Level.SEVERE, null, ex);
          }
    }

    
    @Override
    public List<Restaurent> findByNom(String nom) {
             List<Restaurent> listeRestaurant =new ArrayList<Restaurent>();
        try {
          String requete= "SELECT * FROM restaurant WHERE  nom = '"+ nom+"'";
  	
        Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            
            while(rs.next()){
                Restaurent resto= new Restaurent();
                resto.setIdrestaurent(rs.getInt(1));
                resto.setNom(rs.getString(2));
                  resto.setAdresse(rs.getString(3));
                resto.setPays(rs.getString(4));
                resto.setNbre_fourchette(rs.getInt(5));
                resto.setDescription(rs.getString(6));
                listeRestaurant.add(resto);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeRestaurant;
    }

   

    @Override
    public List<Restaurent> displayAllRestaurant() {
           List<Restaurent> listeRestaurant =new ArrayList<Restaurent>();
        try {
            
            
            String requete="SELECT * FROM restaurant";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            
            while(rs.next()){
                Restaurent resto= new Restaurent();
                resto.setIdrestaurent(rs.getInt(1));
                resto.setNom(rs.getString(2));
                  resto.setAdresse(rs.getString(3));
                resto.setPays(rs.getString(4));
                resto.setNbre_fourchette(rs.getInt(5));
                resto.setDescription(rs.getString(6));
                listeRestaurant.add(resto);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeRestaurant;
    }

    @Override
    public Restaurent findById(int id) {
         Restaurent resto= new Restaurent(); 
          String requette= "SELECT * FROM restaurant WHERE  idrestaurent = " + id;
  	try {
                  Statement st = cnx.createStatement(); 
                 ResultSet rs= st.executeQuery(requette);
              while(rs.next()){
               
              resto.setIdrestaurent(rs.getInt(1));
                resto.setNom(rs.getString(2));
                  resto.setAdresse(rs.getString(3));
                resto.setPays(rs.getString(4));
                resto.setNbre_fourchette(rs.getInt(5));
                resto.setDescription(rs.getString(6));
               
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
                 
		   return resto;
    }

    @Override
    public List<Restaurent> findByPays(String pays) {
              List<Restaurent> listeRestaurant =new ArrayList<Restaurent>();
        try {
          String requete= "SELECT * FROM restaurant WHERE  pays = '"+ pays+"'";
  	
        Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            
            while(rs.next()){
                Restaurent resto= new Restaurent();
                resto.setIdrestaurent(rs.getInt(1));
                resto.setNom(rs.getString(2));
                  resto.setAdresse(rs.getString(3));
                resto.setPays(rs.getString(4));
                resto.setNbre_fourchette(rs.getInt(5));
                resto.setDescription(rs.getString(6));
                listeRestaurant.add(resto);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeRestaurant;
    }

    @Override
    public Void evaluerRestaurant(float n, Restaurent res) {
           String req="update restaurant set evaluation=(evaluation+?)/2 where idrestaurent=? ";
         
        try {
            PreparedStatement pst=cnx.prepareStatement(req);
            pst.setFloat(1,n);
            pst.setInt(2,res.getIdrestaurent());
              
            pst.executeUpdate();
            System.out.println("evalution ");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;
    }
    }
    
    
    

