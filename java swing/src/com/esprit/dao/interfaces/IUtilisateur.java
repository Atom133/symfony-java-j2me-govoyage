/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;

import com.esprit.dao.entities.Fos_user;
import java.util.List;

/**
 *
 * @author islem_nawara
 */
public interface IUtilisateur {
    void insertUtilisateur(Fos_user utilisateuur);
    void deleteUtilisateur (int id);
    void bloquerUtilisateur(Fos_user utilisateur);
    void debloquerUtilisateur(Fos_user utilisateur);
   
   Fos_user findById(int id);
   Fos_user findByNom(String nom);
   List<Fos_user> displayAllUtilisateur();
    
    
    
}
