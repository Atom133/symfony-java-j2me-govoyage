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
public class AffRecommandationRestaurentALL extends AbstractTableModel{
  String[] entete ={"description", "Nom"};
    List<Recommandation> dest= new ArrayList<>();
    RecommandationDAO DAO =new RecommandationDAO ();
    
    public AffRecommandationRestaurentALL() {
        
         dest=DAO.displayRecommadationRestaurent();
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
                return dest.get(rowIndex).getDescription_recommandation();
                 case 1:
                    
                return dest.get(rowIndex).getRestaurent().getNom();
        
               
                    
            default:
                return null;}
    }
    
    
}
