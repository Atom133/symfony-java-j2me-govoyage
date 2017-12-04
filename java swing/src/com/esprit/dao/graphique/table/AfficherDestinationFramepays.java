/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique.table;

import com.esprit.dao.entities.Destination;
import com.esprit.implementations.DestinationDAO;
import java.util.ArrayList;
import java.util.List;
import javax.swing.JTextField;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author Sony
 */
public class AfficherDestinationFramepays extends AbstractTableModel{
     String[] entete ={"Pays", "Adresse","Description","Evalution"};
    List<Destination> des = new ArrayList<>();
    DestinationDAO DAO;
    JTextField pays;

    public AfficherDestinationFramepays(JTextField pays) {
         DAO = new DestinationDAO();
        des = DAO.chercherDestinationparid(pays.getText());
        this.pays=pays;
    }

   

    @Override
    public int getRowCount() {
          return des.size();
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
                return des.get(rowIndex).getPays();
            case 1:
                return des.get(rowIndex).getAdresse();
                 case 2:
                return des.get(rowIndex).getDescription();
                     case 3:
                return des.get(rowIndex).getEvalution();
            default:
                return null;}
    }
    
}
