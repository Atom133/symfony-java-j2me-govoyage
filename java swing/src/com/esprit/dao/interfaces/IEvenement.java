/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;

import com.esprit.dao.entities.Evenement;
import com.esprit.dao.entities.Fos_user;
import java.util.List;

/**
 *
 * @author islem_nawara
 */
public interface IEvenement {
     void insertEvenement(Evenement evenement);
    void deleteEvenement (int id);
    void modifierEvenement (Evenement evenement); 
    Evenement findById(int id);
      List<Evenement> displayAllEvenemenetByUtilisateur(int id);
   
    
    
   
    
    List<Evenement> displayAllEvenement();
    
    
}
