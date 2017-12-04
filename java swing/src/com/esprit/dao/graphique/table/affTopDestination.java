/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique.table;

import com.esprit.dao.entities.Destination;
import com.esprit.implementations.DestinationDAO;
import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;
import java.util.TreeSet;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author Sony
 */
public class affTopDestination extends AbstractTableModel{
 String[] entete ={"Destinaton", "Pays", "Description"};
    List<Destination> des= new ArrayList<Destination>();
    DestinationDAO rc;

    public affTopDestination(String p) {
        rc=new DestinationDAO();
       
          Iterator it = rc.chercherDestinationTop(p).iterator();
        while(it.hasNext()){
            des.add((Destination)it.next());
        }
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
                return des.get(rowIndex).getAdresse();
            case 1:
                return des.get(rowIndex).getPays();
                 case 2:
                    
                return des.get(rowIndex).getDescription();
         
               
                    
            default:
                return null;}
    }
    
}
