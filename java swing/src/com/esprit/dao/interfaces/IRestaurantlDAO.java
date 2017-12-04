/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.esprit.dao.interfaces;
import com.esprit.dao.entities.Restaurent;
import java.util.List;


/**
 *
 * @author DELL
 */
public interface IRestaurantlDAO {
    void insert(Restaurent restaurant);
    void deleteRestaurant (int id);
    void modifierRestaurant (Restaurent restaurant); 
    Restaurent findById(int id);
  
      List<Restaurent> findByNom(String nom);
      List<Restaurent> findByPays(String pays);
    List<Restaurent> displayAllRestaurant();
     Void evaluerRestaurant(float n,Restaurent res);
    
}
