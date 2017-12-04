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
public class afficherExperience extends AbstractTableModel{
    List<Experience> experiences;
    ExperienceDAO  expdao= new ExperienceDAO();
    String []entete={"Lieu","Date du début","Date de retour","Type","Description"};
    public  afficherExperience(){
    experiences = expdao.displayAllExperiences();}
    
    
 @Override
    public int getRowCount() {
          return experiences.size();
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
               return null;
   }    


// throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
 
    
}
