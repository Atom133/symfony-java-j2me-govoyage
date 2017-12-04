/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique;

import com.esprit.dao.entities.*;
import com.esprit.implementations.PubadminDAO;
import java.util.List;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author mehdikarray
 */
public class TablePub extends AbstractTableModel{
    List <Pubadmin> pubadmin;
    PubadminDAO pubadminDAO=new PubadminDAO();
    String [] entete={"id","typepublication","decription experiance","description evenement","description recommandation"};

    public TablePub() {
        pubadmin =pubadminDAO.DisplayPubadmin();
    }

    
    @Override
    public int getRowCount() {
       return pubadmin.size();
    }

    @Override
    public int getColumnCount() {
        return entete.length;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        switch(columnIndex){
           case 0:
               return pubadmin.get(rowIndex).getIdpub(); 
           case 1:
               return pubadmin.get(rowIndex).getTypepub();
           case 2:
               return pubadmin.get(rowIndex).getDescex();
           case 3 :
               return pubadmin.get(rowIndex).getDesceven();
           case 4:
               return pubadmin.get(rowIndex).getDescrec();
           
           
           default:
               return null;
       
       }
    }
    @Override
    public String getColumnName(int column) {
        return entete[column];
    }
}
