/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;

import com.esprit.dao.entities.Transport;
import java.util.List;
import java.util.TreeSet;

/**
 *
 * @author Sony
 */
public interface ITransportDAO {
    void ajouterTransport(Transport t);
    Void supprimerTransport(int id);
  List<Transport> selectTransport();
  List<Transport> selectbytype(String t);
  void modifierTransport(Transport t);
   Transport rechercherTransport(int id);
   List<Transport> recherchebypays(String p);
   Void evavluerTransport(float n,Transport t);
   TreeSet<Transport> afficherTopTransport(String p);
    
   
}
