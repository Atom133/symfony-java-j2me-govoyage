/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.implementations;

import com.esprit.dao.entities.Experience;
import com.esprit.dao.entities.Fos_user;
import com.esprit.dao.interfaces.IExperienceDAO;
import com.esprit.dao.techniques.Myconnexion;
//import com.esprit.interfaces.IExperienceDAO;
import java.util.List;
//import com.esprit.dao.technique.MyConnection;
import java.sql.Connection;
import java.sql.Date;
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
public class ExperienceDAO implements IExperienceDAO {
        Connection cnx;

    public ExperienceDAO() {
        cnx=Myconnexion.getInstance();
    }

  
    
    

    @Override
    public void deleteExp(int id) {
        String requete = "delete from publication where id=" + id;
        Statement st;
        try {
            st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("suppression réussie");
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceDAO.class.getName()).log(Level.SEVERE, null, ex);
        }

    }


    public List<Experience> findByType(String lieu) {
                List<Experience> listeExp = new ArrayList<Experience>();

        String requete = "SELECT* FROM publication WHERE destination_experience= " + lieu;
        try {

            Statement st = cnx.createStatement();
            ResultSet rst = st.executeQuery(requete);
            while (rst.next()) {
                Experience exp=new Experience();

                exp.setDestination_experience(rst.getString("destination_experience"));
                exp.setDate_arriv(rst.getString("date_arrive_experience"));
                exp.setDate_depart(rst.getString("date_depart_experience"));
                exp.setDescription_experience(rst.getString("description_experience"));
                exp.setType_exeprience(rst.getString("type_experience"));
                exp.setIdpublication(rst.getInt("id"));
                listeExp.add(exp);
            }
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceDAO.class.getName()).log(Level.SEVERE, null, ex);
            ex.printStackTrace();

        }
        return listeExp;

    }

    
    public List<Experience>  findByPlace (String lieu) {
        List<Experience> listeExp = new ArrayList<Experience>();
        try {
       String req="SELECT * FROM publication WHERE destination_experience='"+lieu+"'";
   PreparedStatement pst=cnx.prepareStatement(req);
          
          
  
   ResultSet rs=pst.executeQuery();
    
            while (rs.next()) {
                Experience exp = new Experience();
                exp.setDestination_experience(rs.getString("destination_experience"));
                exp. setDate_depart(rs.getString("date_arrive_experience"));
                exp.setDate_depart(rs.getString("date_depart_experience"));
                exp.setDescription_experience(rs.getString("description_experience"));
                exp.setType_exeprience(rs.getString("type_experience"));
            exp.setIdpublication(rs.getInt("id"));

                listeExp.add(exp);
            }
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceDAO.class.getName()).log(Level.SEVERE, null, ex);
            ex.printStackTrace();
        }
        return listeExp;
        
    }
 
           

  @Override 
    public List<Experience> displayAllExperiences() {
    List<Experience> listeExp = new ArrayList<Experience>();
        try {

            String requete = "SELECT * FROM Publication where type_publication=?";
            Statement st = cnx. prepareStatement(requete);
          PreparedStatement pst=cnx.prepareStatement(requete);
          pst.setString(1,"Experience");
        ResultSet rs=pst.executeQuery();
            while (rs.next()) {
                Experience exp = new Experience();
                Fos_user u = new Fos_user();
                exp.setDestination_experience(rs.getString(10));
                exp.setDate_arriv(rs.getString(8));
                exp.setDate_depart(rs.getString(9));
                exp.setDescription_experience(rs.getString(11));
                exp.setType_exeprience(rs.getString(12));
                exp.setIdpublication(rs.getInt(1));
                 u.setId(rs.getInt(2));
                 exp.setUser(u);
                listeExp.add(exp);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeExp;

   
    }

    @Override
    public Experience findByType(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Experience> findByPlaceAndType(String lieu, String type) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void insertExp(Experience exp) {
       String requete = " insert into publication(destination_experience,description_experience,type_experience,date_depart_experience,date_arrive_experience,type_publication,idUser) values (?,?,?,?,?,?,?) ";
        try {
          PreparedStatement pst = cnx.prepareStatement(requete);

            pst.setString(1, exp.getDestination_experience());
            pst.setString(2, exp.getDescription_experience());
            pst.setString(3, exp.getType_exeprience());
            pst.setString(4,exp.getDate_depart());

            pst.setString(5,exp.getDate_arriv());
            pst.setString(6, exp.getType_publication());
            pst.setInt(7, exp.getUser().getId());
           
          
             pst.executeUpdate();
            System.out.println("Insertion réussie");
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void modifierExp(Experience exp) {
       // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    
    String requete="update publication set destination_experience=?,description_experience=? where id=?";
        try {
            
            
            
            PreparedStatement pst= cnx.prepareStatement(requete);
            
           
            pst.setString(1,exp.getDestination_experience());
            pst.setString(2,exp.getDescription_experience());
            pst.setInt(3,exp.getIdpublication());
            pst.executeUpdate();
            System.out.println("Mise à jour effectuée");
        } catch (SQLException ex) {
            Logger.getLogger(ExperienceDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    
}}
    

    
    

