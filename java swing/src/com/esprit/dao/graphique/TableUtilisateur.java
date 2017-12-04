/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique;

import com.esprit.dao.entities.Fos_user;
import com.esprit.implementations.UtilisateurDAO;
import java.util.List;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author islem_nawara
 */
public class TableUtilisateur extends AbstractTableModel {
     List<Fos_user> utilisateurs;
    UtilisateurDAO utilisateurDAO=new UtilisateurDAO(); 
    String [] entete={"id","username","e-mail","block"};

    public TableUtilisateur() {
         utilisateurs =utilisateurDAO.displayAllUtilisateur();
    }
    

    @Override
    public int getRowCount() {
        return utilisateurs.size();
    }

    @Override
    public int getColumnCount() {
        return entete.length;
                }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
       switch(columnIndex){
           case 0:
               return utilisateurs.get(rowIndex).getId(); 
           case 1:
               return utilisateurs.get(rowIndex).getUsername();
           case 2:
               return utilisateurs.get(rowIndex).getEmail();
           case 3 :
               return utilisateurs.get(rowIndex).getLocked();
      
           default:
               return null;
       
       }
    }

    @Override
    public String getColumnName(int column) {
        return entete[column];
    }
    
}
