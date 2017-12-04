/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.esprit.implementations;
import com.esprit.dao.entities.Hotel;
import com.esprit.dao.interfaces.*;
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
public class HotelDAO implements IHotelDAO{
    Connection cnx;

    public HotelDAO() {
         cnx=Myconnexion.getInstance();
    }
    

    @Override
    public void insertHotel(Hotel hotel) {
          String requete="insert into hotel(nom,adresse,pays,nb_etoile,description,evaluation) values (?,?,?,?,?,?)";
        try {
            
            PreparedStatement pst= cnx.prepareStatement(requete);
             pst.setString(1, hotel.getNom());
              pst.setString(2, hotel.getAdresse());
                 pst.setString(3, hotel.getPays());
               pst.setInt(4, hotel.getNb_etoile());
                pst.setString(5, hotel.getDescription());
                 pst.setString(6, "0");
             pst.executeUpdate();
            System.out.println("Insertion réussie");
        } catch (SQLException ex) {
            Logger.getLogger(HotelDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void deleteHotel(int id) {
          String requete="delete from hotel where id="+id;
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
    public void modifierHotel(Hotel hotel) {
         String requette2="update hotel set nom=?,adresse=?,pays=?,nb_etoile=?,description=? where id=?";
     
         
              try {  PreparedStatement pst2 = cnx.prepareStatement(requette2);
                pst2.setString(1,hotel.getNom());
      pst2.setString(2,hotel.getAdresse());
      pst2.setString(3,hotel.getPays());
      pst2.setInt(4,hotel.getNb_etoile());
      pst2.setString(5,hotel.getDescription());
       pst2.setInt(6,hotel.getIdhotel());
      pst2.executeUpdate();
      System.out.println("modification reussie");
          } catch (SQLException ex) {
              Logger.getLogger(HotelDAO.class.getName()).log(Level.SEVERE, null, ex);
          }
	   
	}
    

    

    @Override
    public List<Hotel> displayAllHotel() {
           List<Hotel> listeHotel =new ArrayList<Hotel>();
        try {
            
            
            String requete="SELECT * FROM hotel";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            
            while(rs.next()){
                 Hotel res= new Hotel();
                res.setIdhotel(rs.getInt(1));
                res.setNom(rs.getString(2));
                  res.setAdresse(rs.getString(3));
                   res.setPays(rs.getString(4));
                res.setNb_etoile(rs.getInt(5));
                res.setDescription(rs.getString(6));
                listeHotel.add(res);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeHotel;
    }
    @Override
    public List<Hotel> findByNom(String nom) {
              List<Hotel> listeHotel =new ArrayList<Hotel>();
          String requete= "SELECT * FROM hotel WHERE  nom = '"+ nom+"'";
  	try {
                      Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            
            while(rs.next()){
                 Hotel hotel= new Hotel();
                hotel.setIdhotel(rs.getInt("idhotel"));
                hotel.setNom(rs.getString("nom"));
                 hotel.setAdresse(rs.getString("adresse"));
                hotel.setPays(rs.getString("pays"));
                hotel.setDescription(rs.getString("description"));
                  hotel.setNb_etoile(rs.getInt("nb_etoile"));
                listeHotel.add(hotel);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeHotel;
    }

    @Override
    public Hotel findById(int id) {
          Hotel hotel = new Hotel(); 
          String requette= "SELECT * FROM hotel WHERE  idhotel = " + id;
  	try {
                  Statement st = cnx.createStatement(); 
                 ResultSet rs= st.executeQuery(requette);
              while(rs.next()){
               
                hotel.setIdhotel(rs.getInt("id"));
                hotel.setNom(rs.getString("nom"));
                 hotel.setAdresse(rs.getString("adresse"));
                hotel.setPays(rs.getString("pays"));
                hotel.setDescription(rs.getString("description"));
                  hotel.setNb_etoile(rs.getInt("nb_etoile"));
               
               
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
                 
		   return hotel;
    }

    @Override
    public List<Hotel> findByPays(String pays) {
             List<Hotel> listeHotel =new ArrayList<Hotel>();
          String requete= "SELECT * FROM hotel WHERE  pays = '"+ pays+"'";
  	try {
                      Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            
            while(rs.next()){
                 Hotel hotel= new Hotel();
                hotel.setIdhotel(rs.getInt("id"));
                hotel.setNom(rs.getString("nom"));
                 hotel.setAdresse(rs.getString("adresse"));
                hotel.setPays(rs.getString("pays"));
                hotel.setDescription(rs.getString("description"));
                  hotel.setNb_etoile(rs.getInt("nb_etoile"));
                listeHotel.add(hotel);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeHotel;
    }

    @Override
    public Void evaluerHotel(float n, Hotel h) {
      String req="update hotel set evaluation=(evaluation+?)/2 where id=? ";
         
        try {
            PreparedStatement pst=cnx.prepareStatement(req);
           
           
             pst.setInt(2,h.getIdhotel());
              pst.setFloat(1,n);
            pst.executeUpdate();
            System.out.println("evalution ");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;
    
    }
    }
    

