/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.esprit.dao.graphique.table;

    import com.esprit.dao.entities.*;
import com.esprit.implementations.*;
import java.util.ArrayList;
import java.util.List;
import javax.swing.JTextField;
import javax.swing.table.AbstractTableModel;
/**
 *
 * @author DELL
 */
public class AfficheLocationByPays extends AbstractTableModel {
 

/**
 *
 * @author DELL
 */

    String[] entete ={"Id_Location", "Type", "Adresse","Pays","Details"};
    List<LocationVacance> t = new ArrayList<>();
    LocationDAO DAO;
JTextField pays;

    public AfficheLocationByPays(JTextField pays) {
        DAO=new LocationDAO();
        t=DAO.findByPays(pays.getText());
        this.pays=pays;
    }

  

    @Override
    public int getRowCount() {
         return t.size();
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
                return t.get(rowIndex).getIdlocation();
            case 1:
                return t.get(rowIndex).getType();
                 case 2:
                return t.get(rowIndex).getAdresse();
            case 3:
                return t.get(rowIndex).getPays();
           case 4:
                return t.get(rowIndex).getDetails();
                
                    
            default:
                return null;}
    }
    
}
    


