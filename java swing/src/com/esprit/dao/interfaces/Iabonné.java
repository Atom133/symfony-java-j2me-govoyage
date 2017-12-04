/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;


import com.esprit.dao.entities.Abonné;
import java.util.List;

/**
 *
 * @author mehdikarray
 */
public interface Iabonné { 
    
    void insertabonné(Abonné abon);
    void delateabonné(int id);
    void updateabonné(Abonné a);
    Abonné findabonéById(int id);
    Abonné findabonnéBymail(String mail);
    List<Abonné> DisplayAllabonné();
    List<Abonné> allmail();
}

    

