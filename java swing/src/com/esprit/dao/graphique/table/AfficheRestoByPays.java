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
public class AfficheRestoByPays extends AbstractTableModel{
    

 

    


/**
 *
 * @author DELL
 */
    String[] entete ={"Id_Restaurant", "Nom", "Adresse","Pays","Nombre fourchette","decription"};
    List<Restaurent> t = new ArrayList<>();
    RestaurantDAO DAO ;
    JTextField pays;

    public AfficheRestoByPays(JTextField pays) {
        DAO =new RestaurantDAO();
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
                return t.get(rowIndex).getIdrestaurent();
            case 1:
                return t.get(rowIndex).getNom();
                 case 2:
                return t.get(rowIndex).getAdresse();
            case 3:
                return t.get(rowIndex).getPays();
                   case 4:
                return t.get(rowIndex).getNbre_fourchette();
                 case 5:
                return t.get(rowIndex).getDescription();
                    
            default:
                return null;}
    }
    
}

    