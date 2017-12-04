/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique;

import com.esprit.dao.entities.Experience;
import com.esprit.implementations.ExperienceDAO;
import java.util.List;
import javax.swing.table.AbstractTableModel;

/**
 *
 * @author Amina
 */
public class chercherParPlace extends AbstractTableModel {
    List<Experience> experiences;
    String ch;
    ExperienceDAO  expdao= new ExperienceDAO();
    //lieu=rome, date_arrive=null, date_depart=null, type=waw, description=voyage
    String []entete={"Lieu","Date de fin","Date du début","Type","Description"};
    public  chercherParPlace(String p){
     ch=p;
    experiences = expdao.findByPlace(ch);
    
    }
    

   public String getColumnName(int i) {
        return entete[i];
    }
    @Override
    public int getRowCount() {
        return experiences.size();
        //throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public int getColumnCount() {
    return entete.length;        
//throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    

    

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
       switch(columnIndex){
       case 0:
           return experiences.get(rowIndex).getDestination_experience();
       case 1:
           return experiences.get(rowIndex).getDate_depart();
       case 2:
           return experiences.get(rowIndex).getDate_arriv();
       case 3:
           return experiences.get(rowIndex).getType_exeprience();
       case 4:
           return experiences.get(rowIndex).getDescription_experience();
       default :
               return null; //throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}}
