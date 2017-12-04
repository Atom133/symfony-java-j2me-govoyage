/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;

import com.esprit.dao.entities.Destination;
import com.esprit.dao.entities.Transport;
import com.esprit.dao.interfaces.ITransportDAO;
import com.esprit.dao.techniques.Myconnexion;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.TreeSet;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Sony
 */
public class TransportDAO implements ITransportDAO{
Connection cnx;

    public TransportDAO() {
        this.cnx =  Myconnexion.getInstance();
    }

    @Override
    public void ajouterTransport(Transport t) {
        String requete="INSERT INTO transport (type,compagnie,evaluation,pays,description) VALUES(?,?,?,?,?)";
        try {
            PreparedStatement pst=cnx.prepareStatement(requete);
            pst.setString(1,t.getType());
            pst.setString(2,t.getCompagnie());
              pst.setInt(3,0);
                  pst.setString(4,t.getPays());
                  pst.setString(5,t.getDescription());
            pst.executeUpdate();
            System.out.println("insertion réussie");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

   

    @Override
    public List<Transport> selectTransport() {
       List<Transport> list=new ArrayList<Transport>();
       try{
   String requete="SELECT * FROM transport";
   Statement st=cnx.createStatement();
   ResultSet rs=st.executeQuery(requete);
   while(rs.next())
   {
   Transport d=new Transport();
   d.setIdtransport(rs.getInt(1));
   d.setType(rs.getString(2));
   d.setCompagnie(rs.getString(3));
   d.setDescription(rs.getString(4));
   d.setEvaluation(rs.getInt(5));
   d.setPays(rs.getString(6));
  
   list.add(d);}}
   catch(SQLException ex)
   {ex.printStackTrace();}
   return list;
    }

    @Override
    public void modifierTransport(Transport t) {
       String req="update transport set type=?,compagnie=?,evaluation=?, description=?,pays=? where id=?";
         
        try {
            PreparedStatement pst=cnx.prepareStatement(req);
            pst.setString(1,t.getType());
            pst.setString(2,t.getCompagnie());
              pst.setFloat(3,t.getEvaluation());
              pst.setString(4,t.getDescription());
               pst.setInt(6,t.getIdtransport());
                 pst.setString(5,t.getPays());
               
            pst.executeUpdate();
            System.out.println("mise a jour effectuée avec succes");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public Transport rechercherTransport(int id) {
      Transport t=new Transport();
       try{
   String req="SELECT * FROM transport WHERE idtransport=?";
   PreparedStatement pst=cnx.prepareStatement(req);
            pst.setInt(1,id);
   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
     

   t.setType(rs.getString(2));
   t.setCompagnie(rs.getString(3));
   t.setDescription(rs.getString(4));
   t.setPays(rs.getString(5));

   }}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return t;

    }

    @Override
    public Void supprimerTransport(int id) {
       String requete="delete from transport where id="+id;
       Statement st;
        try {
            st = cnx.createStatement();
              st.executeUpdate(requete);
              System.out.println("suppression réussie");
        } catch (SQLException ex) {
            Logger.getLogger(TransportDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;
    }

    @Override
    public List<Transport> selectbytype(String t) {
        
       List<Transport> list=new ArrayList<Transport>();
       try{
   String requete="SELECT * FROM transport WHERE type='"+t+"'";
   Statement st=cnx.createStatement();
//   PreparedStatement pst=cnx.prepareStatement(requete);
//        pst.setString(1, t);
    ResultSet rs=st.executeQuery(requete);
   while(rs.next())
   {
       Transport d=new Transport();
   d.setIdtransport(rs.getInt(1));
    d.setType(rs.getString(2));
   d.setCompagnie(rs.getString(3));
//   d.setEvaluation(rs.getInt(4));
   d.setPays(rs.getString(5));
  
   list.add(d);}}
   catch(SQLException ex)
   {ex.printStackTrace();}
   return list; 
        
        
  
    }

    @Override
    public List<Transport> recherchebypays(String p) {
         List<Transport> list=new ArrayList<Transport>();
       try{
   String req="SELECT * FROM transport WHERE pays=?";
   PreparedStatement pst=cnx.prepareStatement(req);
            pst.setString(1,p);
   ResultSet rs=pst.executeQuery();
    
   while(rs.next())
   {
      Transport des=new Transport();
    des.setIdtransport(rs.getInt(1));
   des.setType(rs.getString(2));
   des.setCompagnie(rs.getString(3));
   des.setDescription(rs.getString(4));
   des.setEvaluation(rs.getInt(5));
   des.setPays(rs.getString("pays"));
   list.add(des);}}
   catch(SQLException ex)
   {ex.printStackTrace();}
      return list;
    }

    @Override
    public Void evavluerTransport(float n, Transport t) {
        String req="update transport set evaluation=(evaluation+?)/2 where idtransport=?";
         
        try {
            PreparedStatement pst=cnx.prepareStatement(req);
            pst.setFloat(1,n);
            pst.setInt(2,t.getIdtransport());
            
         
               
            pst.executeUpdate();
            System.out.println("Evaluer");
        } catch (SQLException ex) {
            Logger.getLogger(DestinationDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;
    }

    @Override
    public TreeSet<Transport> afficherTopTransport(String p) {
      List<Transport> list=new ArrayList<Transport>();
       TreeSet<Transport> l=new TreeSet<Transport>();  
      if(p=="")
        {
     list=this.selectTransport();
    
     for (Transport nb : list) {
           l.add(nb);
        }}
        else
        {
        
     list=this.recherchebypays(p);
    
     for (Transport nb : list) {
           l.add(nb);
        }
        
        }
    
     return l;
    }

    

   
    
}
