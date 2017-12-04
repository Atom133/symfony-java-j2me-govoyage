/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique.table;

import com.esprit.dao.entities.Destination;
import com.esprit.dao.entities.Hotel;
import com.esprit.dao.entities.Recommandation;
import com.esprit.dao.entities.Fos_user;
import com.esprit.implementations.DestinationDAO;
import com.esprit.implementations.HotelDAO;
import com.esprit.implementations.RecommandationDAO;
import com.esprit.implementations.RestaurantDAO;
import java.util.ArrayList;
import java.util.List;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author Sony
 */
public class AffRecommandationTransport extends AbstractTableModel{
  String[] entete ={"Id_REC", "description", "Compagnie","Pays"};
    List<Recommandation> dest= new ArrayList<>();
    RecommandationDAO DAO =new RecommandationDAO ();
    Fos_user ut;

    public List<Recommandation> getDest() {
        return dest;
    }

    public void setDest(List<Recommandation> dest) {
        this.dest = dest;
    }
    
    public AffRecommandationTransport(Fos_user u) {
         this.ut=u;  
         dest=DAO.displayRecommadationtransport(ut);
    }

    @Override
    public int getRowCount() {
         return dest.size();
    }

   
    @Override
    public int getColumnCount() {
       return entete.length;
    }
  public String getColumnName(int i) {
        return entete[i];
    }
  
  @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        switch (columnIndex) {
          case 0:
                return dest.get(rowIndex).getIdpublication();
            case 1:
                return dest.get(rowIndex).getDescription_recommandation();
                 case 2:
                    
                return dest.get(rowIndex).getTransport().getCompagnie();
            case 3:
                return dest.get(rowIndex).getPays_recommandation();
               
                    
            default:
                return null;}
    }
    
    
}
