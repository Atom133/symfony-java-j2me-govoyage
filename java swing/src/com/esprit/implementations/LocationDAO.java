/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.esprit.implementations;
import com.esprit.dao.entities.LocationVacance;
import com.esprit.dao.interfaces.ILoacationDAO;
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
public class LocationDAO implements ILoacationDAO {
Connection cnx;

    public LocationDAO() {
         cnx=Myconnexion.getInstance();
    }

    @Override
    public void insertLocation(LocationVacance location) {
          String requete="insert into location_vacance(type,adresse,pays,details) values (?,?,?,?)";
        try {
            
            PreparedStatement pst= cnx.prepareStatement(requete);
             pst.setString(1, location.getType());
              pst.setString(2, location.getAdresse());
               pst.setString(3, location.getPays());
                pst.setString(4, location.getDetails());
             pst.executeUpdate();
            System.out.println("Insertion réussie");
        } catch (SQLException ex) {
            Logger.getLogger(HotelDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }

    @Override
    public void deleteLocation(int id) {
           String requete="delete from location_vacance where idlocation="+id;
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
    public void modifierLocation(LocationVacance location) {
        String requette2="update location_vacance set type=?,adresse=?,pays=?,details=? where id=?";
     
         
              try {  PreparedStatement pst2 = cnx.prepareStatement(requette2);
                pst2.setString(1,location.getType());
      pst2.setString(2,location.getAdresse());
      pst2.setString(3,location.getPays());
      pst2.setString(4,location.getDetails());
       pst2.setInt(5,location.getIdlocation());
      pst2.executeUpdate();
      System.out.println("modification reussie");
          } catch (SQLException ex) {
              Logger.getLogger(HotelDAO.class.getName()).log(Level.SEVERE, null, ex);
          }
	   
	}

    @Override
    public LocationVacance findById(int id) {
         LocationVacance location = new LocationVacance(); 
          String requette= "SELECT * FROM location_vacance WHERE  idlocation = " + id;
  	try {
                  Statement st = cnx.createStatement(); 
                 ResultSet rs= st.executeQuery(requette);
              while(rs.next()){
               
                location.setIdlocation(rs.getInt(1));
                location.setType(rs.getString(2));
                 location.setAdresse(rs.getString(3));
                location.setPays(rs.getString(4));
                location.setDetails(rs.getString(5));
               
               
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
                 
		   return location;
    }
    

    @Override
    public List<LocationVacance> findByType(String type) {
         List<LocationVacance> listeLocation =new ArrayList<LocationVacance>();
          String requete= "SELECT * FROM location_vacance WHERE  type = '"+ type +"'";
  	try {
                  Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            
            while(rs.next()){
                LocationVacance res= new LocationVacance();
                res.setIdlocation(rs.getInt(1));
                res.setType(rs.getString(2));
                res.setAdresse(rs.getString(3));
                res.setPays(rs.getString(4));
                res.setDetails(rs.getString(5));
                listeLocation.add(res);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeLocation;
    }

    @Override
    public List<LocationVacance> displayAllLocation() {
           List<LocationVacance> listeLocation =new ArrayList<LocationVacance>();
        try {
            
            
            String requete="SELECT * FROM location_vacance";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            
            while(rs.next()){
                LocationVacance res= new LocationVacance();
                res.setIdlocation(rs.getInt(1));
                res.setType(rs.getString(2));
                res.setAdresse(rs.getString(3));
                res.setPays(rs.getString(4));
                res.setDetails(rs.getString(5));
                listeLocation.add(res);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeLocation;
    }

    @Override
    public List<LocationVacance> findByPays(String pays) {
            List<LocationVacance> listeLocation =new ArrayList<LocationVacance>();
          String requete= "SELECT * FROM location_vacance WHERE  pays = '"+ pays +"'";
  	try {
                  Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            
            while(rs.next()){
                LocationVacance res= new LocationVacance();
                res.setIdlocation(rs.getInt(1));
                res.setType(rs.getString(2));
                res.setAdresse(rs.getString(3));
                res.setPays(rs.getString(4));
                res.setDetails(rs.getString(5));
                listeLocation.add(res);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeLocation;
    }

    @Override
    public Void evaluerLocation(float n, LocationVacance loc) {
         
     String req="update location_vacance set evaluation=(evaluation+?)/2 where idlocation=? ";
         
        try {
            PreparedStatement pst=cnx.prepareStatement(req);
            pst.setFloat(1,n);
            pst.setInt(2,loc.getIdlocation());
              
            pst.executeUpdate();
            System.out.println("evalution ");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;
    }
    }

