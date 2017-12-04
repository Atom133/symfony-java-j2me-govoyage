/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;
import com.esprit.dao.entities.Experience;
import java.util.List;

/**
 *
 * @author Amina
 */
public interface IExperienceDAO {
    void insertExp(Experience exp);
    void modifierExp(Experience exp);
    void deleteExp (int id);
    Experience findByType(int id);
    List<Experience> displayAllExperiences();
    public List<Experience>  findByPlaceAndType(String lieu,String type) ;

}
