/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.esprit.dao.interfaces;
import com.esprit.dao.entities.Hotel;
import java.util.List;


/**
 *
 * @author DELL
 */
public interface IHotelDAO {
     void insertHotel(Hotel hotel);
    void deleteHotel (int id);
    void modifierHotel (Hotel hotel); 
    Hotel findById(int id);
    
    List<Hotel> findByNom(String nom);
       List<Hotel> findByPays(String pays);
    List<Hotel> displayAllHotel();//methode qui retourne une liste des depots
     Void evaluerHotel(float n,Hotel h);
    
}
