/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;

import com.esprit.dao.entities.Activite;
import java.util.List;

/**
 *
 * @author Amina
 */
public interface IActiviteDAO {
    void insertAct(Activite act);
    void deleteAct (int id);
    void modifierAct (Activite act); 
    List<Activite> displayAllActivite();
    List<Activite> findByGuide(String titre);
    
}
