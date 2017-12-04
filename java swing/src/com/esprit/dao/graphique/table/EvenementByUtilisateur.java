/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique.table;

import com.esprit.dao.entities.*;
import com.esprit.implementations.*;
import java.util.List;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author islem_nawara
 */
public class EvenementByUtilisateur extends AbstractTableModel{
     List<Evenement> evenements;
    EvenementDAO evDAO=new EvenementDAO(); 
    String [] entete={"lieu","date","detail","user"};
    int id;

    public EvenementByUtilisateur(int id) {
         evenements =evDAO.displayAllEvenemenetByUtilisateur(id);
    }
    

    public int getRowCount() {
        return evenements.size();
    }

    public int getColumnCount() {
        return entete.length;
                }

    public Object getValueAt(int rowIndex, int columnIndex) {
       switch(columnIndex){
          
           case 0:
               return evenements.get(rowIndex).getLieu();
           case 1:
               return evenements.get(rowIndex).getDate();
           case 2 :
               return evenements.get(rowIndex).getDetail();
           case 3:
               return (evenements.get(rowIndex).getUser().getUsername_canonical());
           default:
               return null;
       
       }
    }

    public String getColumnName(int column) {
        return entete[column];
    }

    
}
