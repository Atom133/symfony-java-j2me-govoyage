/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;

import com.esprit.dao.entities.Destination;
import java.util.List;
import java.util.Set;
import java.util.TreeSet;

/**
 * 
 * @author Sony
 */
public interface IDestinationDAO {
       void ajouterDestination(Destination d);
   
    List<Destination> selectDestination();
    void modifierDestination(Destination d);
    void deleteDestination(int id);
    Destination chercherDestinationparid(int id);
      List<Destination> chercherDestinationparid(String p);
      Void evavluerDestination(float n,Destination d);
     TreeSet<Destination> chercherDestinationTop(String p);
    
    
}
