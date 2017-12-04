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
public class AfficheHotelByPays extends AbstractTableModel {
 

/**
 *
 * @author DELL
 */

    String[] entete ={"Id_Hotels", "Nom", "Adresse","Pays","Nombre etoile","decription"};
    List<Hotel> hotel = new ArrayList<>();
    HotelDAO DAO ;
    JTextField pays;

    public AfficheHotelByPays(JTextField pays) {
        
         DAO =new HotelDAO();
        hotel = DAO.findByPays(pays.getText());
        this.pays=pays;
    }
  



    @Override
    public int getRowCount() {
         return hotel.size();
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
                return hotel.get(rowIndex).getIdhotel();
            case 1:
                return hotel.get(rowIndex).getNom();
                 case 2:
                return hotel.get(rowIndex).getAdresse();
            case 3:
                return hotel.get(rowIndex).getPays();
                 case 4:
                return hotel.get(rowIndex).getNb_etoile();
                 case 5:
                return hotel.get(rowIndex).getDescription();
                    
            default:
                return null;}
    }
    
}


