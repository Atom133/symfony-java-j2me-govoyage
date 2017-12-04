/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.esprit.dao.graphique;

import com.esprit.implementations.HotelDAO;
import com.esprit.dao.entities.*;
import java.util.ArrayList;
import java.util.List;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author DELL
 */
public class AfficherHotel extends AbstractTableModel{
    String[] entete ={"Id_Hotels", "Nom", "Adresse","Pays","Nombre etoile","decription"};
    List<Hotel> t = new ArrayList<>();
    HotelDAO DAO;
  

    public AfficherHotel() {
             DAO = new HotelDAO();
        t = DAO.displayAllHotel();
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
                return t.get(rowIndex).getIdhotel();
            case 1:
                return t.get(rowIndex).getNom();
                 case 2:
                return t.get(rowIndex).getAdresse();
            case 3:
                return t.get(rowIndex).getPays();
                case 4:
                return t.get(rowIndex).getNb_etoile();
                 case 5:
                return t.get(rowIndex).getDescription();
                    
            default:
                return null;}
    }
    
}
