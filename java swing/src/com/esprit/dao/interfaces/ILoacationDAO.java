/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.esprit.dao.interfaces;
import com.esprit.dao.entities.LocationVacance;
import java.util.List;

/**
 *
 * @author DELL
 */
public interface ILoacationDAO {
    void insertLocation(LocationVacance loc);
    void deleteLocation (int id);
    void modifierLocation (LocationVacance loc); 
    LocationVacance findById(int id);
  List<LocationVacance> findByType(String type);
    List<LocationVacance> findByPays(String pays);
    List<LocationVacance> displayAllLocation();
     Void evaluerLocation(float n,LocationVacance loc);
    
}
