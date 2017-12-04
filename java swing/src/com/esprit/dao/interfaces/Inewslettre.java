/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;



import com.esprit.dao.entities.Newslettre;
import java.util.List;

/**
 *
 * @author mehdikarray
 */
public interface Inewslettre {
    void insertnewslettre(Newslettre ne);
    void delatenewslettre(int id);
    void updatenewslettre(Newslettre ne);
    Newslettre findnewslettreById(int id);
    Newslettre findnewslettreBydate(String date);
    Newslettre findnewslettreBytexte(String texte);
    List<Newslettre> DisplayAllnewslettre();
   
}
