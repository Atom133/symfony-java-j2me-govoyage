/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;

import com.esprit.dao.entities.Destination;
import com.esprit.dao.entities.Hotel;
import com.esprit.dao.entities.LocationVacance;
import com.esprit.dao.entities.Recommandation;
import com.esprit.dao.entities.Restaurent;
import com.esprit.dao.entities.Transport;
import com.esprit.dao.entities.Fos_user;
import com.esprit.dao.interfaces.IRecommandationDAO;
import com.esprit.dao.techniques.Myconnexion;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Sony
 */
public class RecommandationDAO  implements IRecommandationDAO{
   Connection cnx;

    public RecommandationDAO() {
         this.cnx = Myconnexion.getInstance();
    }

    @Override
    public void ajouterRecommandationDestination(Recommandation r) {
      
        String requete="INSERT INTO publication (description_recommandation,pays_recommandation,type_publication,iddestination,idUser) VALUES(?,?,?,?,?)";
        try {
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,r.getDescription_recommandation());
            pst.setString(2,r.getPays_recommandation());
             
                pst.setString(3,r.getType_publication());
                pst.setInt(4,r.getDestination().getIddestination());
              pst.setInt(5,r.getUser().getId());
            pst.executeUpdate();
            System.out.println("insertion réussie");
            
            
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
    }

    @Override
    public void ajouterRecommandationTransport(Recommandation r) {
        System.out.println(r.getDescription_recommandation());
        String requete="INSERT INTO publication (description_recommandation,pays_recommandation,idtransport,idUser,type_publication) VALUES(?,?,?,?,?)";
        try {
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,r.getDescription_recommandation());
            pst.setString(2,r.getPays_recommandation());
             pst.setInt(3,r.getTransport().getIdtransport());
            pst.setInt(4,r.getUser().getId());
             pst.setString(5,r.getType_publication());
            pst.executeUpdate();
            System.out.println("insertion ");
           
           
            
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void supprimerRecommandation(int id) {
    String requete="delete from publication where id=?";
       
        try {
           PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(1,id);
             pst.executeUpdate();
              System.out.println("suppression réussie");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void ajouterRecommandationHotel(Recommandation r) {
          System.out.println("recom"+r);
        String requete="INSERT INTO publication (description_recommandation,pays_recommandation,idhotel,idUser,type_publication) VALUES(?,?,?,?,?)";
        try {
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,r.getDescription_recommandation());
            pst.setString(2,r.getPays_recommandation());
             pst.setInt(3,r.getHotel().getIdHotel());
            pst.setInt(4,r.getUser().getId());
             pst.setString(5,r.getType_publication());
            pst.executeUpdate();
            System.out.println("insertion ");
           
           
            
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void ajouterRecommandationlocationVacance(Recommandation r) {
      System.out.println("recom"+r);
        String requete="INSERT INTO publication (description_recommandation,pays_recommandation,idlocation,idUser,type_publication) VALUES(?,?,?,?,?)";
        try {
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,r.getDescription_recommandation());
            pst.setString(2,r.getPays_recommandation());
             pst.setInt(3,r.getLocationv().getIdlocation());
            pst.setInt(4,r.getUser().getId());
             pst.setString(5,r.getType_publication());
            pst.executeUpdate();
            System.out.println("insertion ");
           
           
            
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void ajouterRecommandationRestaurent(Recommandation r) {
       System.out.println("recom"+r);
        String requete="INSERT INTO publication (description_recommandation,pays_recommandation,idrestaurent,idUser,type_publication) VALUES(?,?,?,?,?)";
        try {
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,r.getDescription_recommandation());
            pst.setString(2,r.getPays_recommandation());
             pst.setInt(3,r.getRestaurent().getIdrestaurent());
            pst.setInt(4,r.getUser().getId());
             pst.setString(5,r.getType_publication());
            pst.executeUpdate();
            System.out.println("insertion ");
           
           
            
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public List<Recommandation> displayRecommadationHotel() {
      List<Recommandation> list=new ArrayList<Recommandation>();
        
       try{
   String requete="SELECT * FROM publication WHERE type_publication=?";
   PreparedStatement pst=cnx.prepareStatement(requete);
   pst.setString(1,"recommandationhotel");

   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Recommandation des=new Recommandation();
 des.setIdpublication(rs.getInt(1));
   des.setPays_recommandation(rs.getString(18));
   des.setDescription_recommandation(rs.getString(17));
      HotelDAO dao=new HotelDAO();
      Hotel h=dao.findById(rs.getInt(19));
      
      
 des.setIdpublication(rs.getInt(1));   
   des.setHotel(h);
  list.add(des);
   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
    
    }

    @Override
    public List<Recommandation> displayRecommadationRestaurent() {
        List<Recommandation> list=new ArrayList<Recommandation>();
        
       try{
   String requete="SELECT * FROM publication WHERE type_publication=?";
   PreparedStatement pst=cnx.prepareStatement(requete);
   pst.setString(1,"recommandationrestaurent");

   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Recommandation des=new Recommandation();
   des.setIdpublication(rs.getInt(1));
   des.setPays_recommandation(rs.getString(18));
   des.setDescription_recommandation(rs.getString(17));
     RestaurantDAO dao=new RestaurantDAO();
      Restaurent r=dao.findById(rs.getInt(20));
      
      
   
   des.setRestaurent(r);
  list.add(des);
   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
    
    }

    @Override
    public List<Recommandation> displayRecommadationlocationVacance() {
         List<Recommandation> list=new ArrayList<Recommandation>();
        
       try{
   String requete="SELECT * FROM publication WHERE type_publication=?";
   PreparedStatement pst=cnx.prepareStatement(requete);
   pst.setString(1,"recommandationlocation");

   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Recommandation des=new Recommandation();
des.setIdpublication(rs.getInt(1));
   des.setPays_recommandation(rs.getString(21));
   des.setDescription_recommandation(rs.getString(20));
     LocationDAO dao=new LocationDAO();
      LocationVacance r=dao.findById(rs.getInt(23));
      
      
   
   des.setLocationv(r);
  list.add(des);
   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
      
    }

    @Override
    public List<Recommandation> displayRecommadationDestination() {
                List<Recommandation> list=new ArrayList<Recommandation>();
        
       try{
   String requete="SELECT * FROM publication WHERE type_publication=?";
   PreparedStatement pst=cnx.prepareStatement(requete);
   pst.setString(1,"recommandationdestination");

   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Recommandation des=new Recommandation();
des.setIdpublication(rs.getInt(1));
   des.setPays_recommandation(rs.getString(21));
   des.setDescription_recommandation(rs.getString(20));
     DestinationDAO dao=new DestinationDAO();
      Destination d=dao.chercherDestinationparid(rs.getInt(26));
      
      
   
   des.setDestination(d);
  list.add(des);
   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
      
    }

    @Override
    public List<Recommandation> displayRecommadationtransport() {
                     List<Recommandation> list=new ArrayList<Recommandation>();
        
       try{
   String requete="SELECT * FROM publication WHERE type_publication=?";
   PreparedStatement pst=cnx.prepareStatement(requete);
   pst.setString(1,"recommandationtransport");

   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Recommandation des=new Recommandation();
des.setIdpublication(rs.getInt(1));
   des.setPays_recommandation(rs.getString(22));
   des.setDescription_recommandation(rs.getString(21));
     TransportDAO dao=new TransportDAO();
     Transport d=dao.rechercherTransport(rs.getInt(25));
      
      d.setIdtransport(rs.getInt(25));
   
   des.setTransport(d);
  list.add(des);
   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
      
     
    }

    


    @Override
    public List<Recommandation> displayRecommadationHotel(Fos_user u) {
   List<Recommandation> list=new ArrayList<Recommandation>();
        
       try{
   String requete="SELECT * FROM publication WHERE (type_publication=?) and (idUser=?)";
   PreparedStatement pst=cnx.prepareStatement(requete);
   pst.setString(1,"recommandationhotel");
   pst.setInt(2,u.getId());

   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Recommandation des=new Recommandation();
 des.setIdpublication(rs.getInt(1));
   des.setPays_recommandation(rs.getString(22));
   des.setDescription_recommandation(rs.getString(21));
      HotelDAO dao=new HotelDAO();
      Hotel h=dao.findById(rs.getInt(23));
      
      
 des.setIdpublication(rs.getInt(1));   
   des.setHotel(h);
  list.add(des);
   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
    }

    @Override
    public List<Recommandation> displayRecommadationRestaurent(Fos_user u) {
         List<Recommandation> list=new ArrayList<Recommandation>();
        
       try{
   String requete="SELECT * FROM publication WHERE (type_publication=?) and (idUser=?)";
   PreparedStatement pst=cnx.prepareStatement(requete);
   pst.setString(1,"recommandationrestaurent");
    pst.setInt(2,u.getId());

   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Recommandation des=new Recommandation();
 des.setIdpublication(rs.getInt(1));
   des.setPays_recommandation(rs.getString(22));
   des.setDescription_recommandation(rs.getString(21));
     RestaurantDAO dao=new RestaurantDAO();
      Restaurent r=dao.findById(rs.getInt(25));
      
      
   
   des.setRestaurent(r);
  list.add(des);
   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
    }

    @Override
    public List<Recommandation> displayRecommadationlocationVacance(Fos_user u) {
       List<Recommandation> list=new ArrayList<Recommandation>();
        
       try{
   String requete="SELECT * FROM publication WHERE (type_publication=?)and(idUser=?)";
   PreparedStatement pst=cnx.prepareStatement(requete);
   pst.setString(1,"recommandationlocation");
   pst.setInt(2,u.getId());

   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
          Recommandation des=new Recommandation();
des.setIdpublication(rs.getInt(1));
   des.setPays_recommandation(rs.getString(22));
   des.setDescription_recommandation(rs.getString(21));
     LocationDAO dao=new LocationDAO();
      LocationVacance r=dao.findById(rs.getInt(27));
      
      
   
   des.setLocationv(r);
  list.add(des);
    
   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
    }

    @Override
    public List<Recommandation> displayRecommadationDestination(Fos_user u) {
      List<Recommandation> list=new ArrayList<Recommandation>();
        
       try{
   String requete="SELECT * FROM publication WHERE (type_publication=?)and(idUser=?)";
   PreparedStatement pst=cnx.prepareStatement(requete);
   pst.setString(1,"recommandationdestination");
     pst.setInt(2,u.getId());

   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Recommandation des=new Recommandation();

   des.setPays_recommandation(rs.getString(20));
   des.setDescription_recommandation(rs.getString(21));
     DestinationDAO dao=new DestinationDAO();
      Destination d=dao.chercherDestinationparid(rs.getInt(26));
      
       System.out.println(d);
       
   des.setDestination(d);
   des.setIdpublication(rs.getInt(1));
  list.add(des);
   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
      
    }

    @Override
    public List<Recommandation> displayRecommadationtransport(Fos_user u) {
                         List<Recommandation> list=new ArrayList<Recommandation>();
        
       try{
   String requete="SELECT * FROM publication WHERE (type_publication=?)and(idUser=?)";
   PreparedStatement pst=cnx.prepareStatement(requete);
   pst.setString(1,"recommandationtransport");
    pst.setInt(2,u.getId());

   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Recommandation des=new Recommandation();
    
   des.setPays_recommandation(rs.getString(20));
   des.setDescription_recommandation(rs.getString(21));
     TransportDAO dao=new TransportDAO();
     Transport d=dao.rechercherTransport(rs.getInt(26));
      
      
   
   des.setTransport(d);
    des.setIdpublication(rs.getInt(1));
  list.add(des);
   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
    }

 
       

   
    
    
}
