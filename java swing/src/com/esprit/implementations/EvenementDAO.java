/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ package com.esprit.implementations;

import com.esprit.dao.entities.Evenement;
import com.esprit.dao.entities.Fos_user;
import com.esprit.dao.interfaces.IEvenement;
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
 * @author islem_nawara
 */
public class EvenementDAO implements IEvenement {

    Connection cnx;

    public EvenementDAO() {
        cnx = Myconnexion.getInstance();
    }

    @Override
    public void insertEvenement(Evenement evenement) {
        String requete = "insert into publication(type_publication,lieu_evenement,date_evenement,description_evenement,idUser) values (?,?,?,?,?)";
        try {

            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.setString(1, evenement.getType_publication());


            pst.setString(2, evenement.getLieu());
            pst.setString(3, evenement.getDate());
            pst.setString(4, evenement.getDetail());
            pst.setInt(5,evenement.getUser().getId());
            pst.executeUpdate();
            System.out.println("Insertion réussie");
        } catch (SQLException ex) {
            Logger.getLogger(EvenementDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void deleteEvenement(int id) {
        String requete = "delete from publication where id=" + id;
        Statement st;
        try {
            st = cnx.createStatement();
            st.executeUpdate(requete);
            System.out.println("suppression réussie");
        } catch (SQLException ex) {
            Logger.getLogger(EvenementDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public void modifierEvenement(Evenement evenement) {
        String requette2 = "update publication set lieu_evenement=?,date_evenement=?,description_evenement=? where id=?";

        try {
            PreparedStatement pst2 = cnx.prepareStatement(requette2);
            pst2.setString(1, evenement.getLieu());
            pst2.setString(2, evenement.getDate());
            pst2.setString(3, evenement.getDetail());
            pst2.setInt(4, evenement.getIdpublication());

            pst2.executeUpdate();
            System.out.println("modification reussie");
        } catch (SQLException ex) {
            Logger.getLogger(EvenementDAO.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @Override
    public Evenement findById(int id) {

        Evenement res = new Evenement();
        String requette = "SELECT * FROM publication WHERE  id = " + id;
        try {
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requette);
            UtilisateurDAO userDAO = new UtilisateurDAO();
            while (rs.next()) {

                res.setIdpublication(rs.getInt(1));
                res.setType_publication(rs.getString(3));
                res.setUser(userDAO.findById(rs.getInt("idUser")));
                res.setLieu(rs.getString(15));
                res.setDate(rs.getString(14));
                res.setDetail(rs.getString(17));

            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }

        return res;

    }

    @Override
    public List<Evenement> displayAllEvenement() {
        List<Evenement> listeEvenement = new ArrayList<>();
        try {

            String requete = "SELECT * FROM Publication where type_publication ='evenement'";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            UtilisateurDAO userDAO = new UtilisateurDAO();

            while (rs.next()) {
                Evenement res = new Evenement();
                res.setIdpublication(rs.getInt(1));
                res.setType_publication(rs.getString(2));
                res.setUser(userDAO.findById(rs.getInt(6)));

                res.setLieu(rs.getString(15));
                res.setDate(rs.getString(16));
                res.setDetail(rs.getString(17));
                listeEvenement.add(res);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeEvenement;
    }

    @Override
    public List<Evenement> displayAllEvenemenetByUtilisateur(int id) {
       
     List<Evenement> listeEvenement = new ArrayList<>();
        try {

            String requete = "SELECT * FROM Publication where type_publication ='evenement' and idUser="+id;
            
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(requete);
            UtilisateurDAO userDAO = new UtilisateurDAO();

            while (rs.next()) {
                Evenement res = new Evenement();
                res.setIdpublication(rs.getInt(1));
                res.setType_publication(rs.getString(2));
                res.setUser(userDAO.findById(rs.getInt(6)));

                res.setLieu(rs.getString(15));
                res.setDate(rs.getString(16));
                res.setDetail(rs.getString(17));
                listeEvenement.add(res);
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return listeEvenement;
    }
    

}
