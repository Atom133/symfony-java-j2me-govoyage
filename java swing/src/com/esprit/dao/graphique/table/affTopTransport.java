/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique.table;

import com.esprit.dao.entities.*;
import com.esprit.implementations.*;
import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;
import java.util.TreeSet;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author Sony
 */
public class affTopTransport extends AbstractTableModel{
 String[] entete ={"Compagnie", "Pays", "Description","type"};
    List<Transport> des= new ArrayList<Transport>();
    TransportDAO rc;

    public affTopTransport(String p) {
        rc=new TransportDAO();
       
          Iterator it = rc.afficherTopTransport(p).iterator();
        while(it.hasNext()){
            des.add((Transport)it.next());
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
                return des.get(rowIndex).getCompagnie();
            case 1:
                return des.get(rowIndex).getPays();
                case 2:
                    
                return des.get(rowIndex).getDescription();
                 case 3:
                    
                return des.get(rowIndex).getType();
         
               
                    
            default:
                return null;}
    }
    
}
