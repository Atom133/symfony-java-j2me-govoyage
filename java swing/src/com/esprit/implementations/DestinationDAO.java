/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;

import com.esprit.dao.entities.Destination;
import com.esprit.dao.interfaces.IDestinationDAO;
import com.esprit.dao.techniques.Myconnexion;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.Set;
import java.util.TreeSet;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Sony
 */
public class DestinationDAO implements IDestinationDAO{
Connection cnx;

    public DestinationDAO() {
        this.cnx = Myconnexion.getInstance();
    }

    @Override
    public void ajouterDestination(Destination d) {
         String requete="INSERT INTO destination (pays,description,ville,evaluation) VALUES(?,?,?,?)";
        try {
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,d.getPays());
            pst.setString(2,d.getDescription());
              pst.setString(3,d.getAdresse());
              pst.setInt(4,0);
            pst.executeUpdate();
            System.out.println("insertion réussie");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public List<Destination> selectDestination() {
      
       List<Destination> list=new ArrayList<Destination>();
       try{
   String requete="SELECT * FROM destination";
   Statement st=cnx.createStatement();
   ResultSet rs=st.executeQuery(requete);
   while(rs.next())
   {
       Destination d=new Destination();
   d.setIddestination(rs.getInt(1));
   d.setPays(rs.getString(2));
   d.setDescription(rs.getString(3));
   d.setAdresse(rs.getString(4));
   d.setEvalution(rs.getInt(5));
   list.add(d);}}
   catch(SQLException ex)
   {ex.printStackTrace();}
   return list;
           
   }

    @Override
    public void modifierDestination(Destination d) {
     String req="update destination set pays=?,description=?,ville=? where id=? ";
         
        try {
            PreparedStatement pst=cnx.prepareStatement(req);
            pst.setString(1,d.getPays());
            pst.setString(2,d.getDescription());
               pst.setString(3,d.getAdresse());
               pst.setInt(4,d.getIddestination());
            pst.executeUpdate();
            System.out.println("mise a jour effectuée avec succes");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void deleteDestination(int id) {
        String requete="delete from destination where id="+id;
       Statement st;
        try {
            st = cnx.createStatement();
              st.executeUpdate(requete);
              System.out.println("suppression réussie");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public Destination chercherDestinationparid(int id) {
        
       Destination des=new Destination();
        try{
   String requete="SELECT * FROM destination WHERE id=?";
   PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setInt(1,id);
   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      

   des.setPays(rs.getString(2));
   des.setDescription(rs.getString(3));
   des.setAdresse(rs.getString(4));
   des.setEvalution(rs.getInt(5));
   ;}}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return des;
    }

    @Override
    public List<Destination> chercherDestinationparid(String p) {
    List<Destination> list=new ArrayList<Destination>();
       try{
   String requete="SELECT * FROM destination WHERE pays=?";
   PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,p);
   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Destination des=new Destination();
 des.setIddestination(rs.getInt(1));
   des.setPays(rs.getString(2));
   des.setDescription(rs.getString(3));
   des.setAdresse(rs.getString(4));
   des.setEvalution(rs.getInt(5));
   list.add(des);}}
   catch(SQLException ex)
   {ex.printStackTrace();}
        return list;
    }

    @Override
    public Void evavluerDestination(float n,Destination d) {
        
     String req="update destination set evaluation=(evaluation+?)/2 where id=? ";
         
        try {
            PreparedStatement pst=cnx.prepareStatement(req);
            pst.setFloat(1,n);
            pst.setInt(2,d.getIddestination());
              
            pst.executeUpdate();
            System.out.println("evalution ");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;
    }

    @Override
    public TreeSet<Destination> chercherDestinationTop(String p) {
      List<Destination> list=new ArrayList<Destination>();
       TreeSet<Destination> l=new TreeSet<Destination>();
     if(p==""){   
   
     list=this.selectDestination();
   
     for (Destination nb : list) {
           l.add(nb);
        }
     }
     else{
    
     list=this.chercherDestinationparid(p);
    
     for (Destination nb : list) {
           l.add(nb);
     
     }}
     return l;
    }

  

    

   
    }

   
    

