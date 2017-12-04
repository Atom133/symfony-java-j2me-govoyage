/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

import java.util.List;

/**
 *
 * @author Sony
 */
public class Forum extends Publication{
    int idforum;
    String pays;

  

    public Forum(int idforum, String pays, String type_publication, Fos_user user) {
        super(type_publication, user);
        this.idforum = idforum;
        this.pays = pays;
    }
    
    
}
