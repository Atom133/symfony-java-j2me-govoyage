/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;

/**
 *
 * @author Amina
 */
import com.esprit.dao.entities.Guide;
import java.util.List;

public interface IGuideDAO {
    
    void insertGuide(Guide guide);
    void deleteGuide (String titre);
    void modifierGuide (Guide guide); 
        Guide findByIdGuide(int id);

    List<Guide> displayAllGuides();
    
    
    
}


