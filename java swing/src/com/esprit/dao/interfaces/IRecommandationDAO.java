/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;

import com.esprit.dao.entities.Destination;
import com.esprit.dao.entities.Recommandation;
import com.esprit.dao.entities.Transport;
import com.esprit.dao.entities.Fos_user;
import java.util.List;
import java.util.Map;

/**
 *
 * @author Sony
 */
public interface IRecommandationDAO {
    void ajouterRecommandationDestination(Recommandation r);
    void ajouterRecommandationTransport(Recommandation r);
      void ajouterRecommandationHotel(Recommandation r);
        void ajouterRecommandationlocationVacance(Recommandation r);
          void ajouterRecommandationRestaurent(Recommandation r);
    void supprimerRecommandation(int id);
    List<Recommandation> displayRecommadationHotel();
     List<Recommandation> displayRecommadationRestaurent();
       List<Recommandation> displayRecommadationlocationVacance();
       List<Recommandation> displayRecommadationDestination();
    List<Recommandation> displayRecommadationtransport();
    List<Recommandation> displayRecommadationHotel(Fos_user u);
     List<Recommandation> displayRecommadationRestaurent(Fos_user u);
       List<Recommandation> displayRecommadationlocationVacance(Fos_user u);
       List<Recommandation> displayRecommadationDestination(Fos_user u);
    List<Recommandation> displayRecommadationtransport(Fos_user u);
      
     
    
}
