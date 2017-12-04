/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;



import com.esprit.dao.entities.Administrateur;
import java.util.List;

/**
 *
 * @author mehdikarray
 */
public interface Iadministrateur {
    void insertadministrateur(Administrateur ad);
    void delateadministrateur(int id);
    void updateadministrateur(Administrateur ad);
    Administrateur findadministrateurById(int id);
    Administrateur findadministrateurBylogin(String login);
    Administrateur findadministrateurBymdp(String mdp);
    List<Administrateur> DisplayAlladministrateur();
   
}
