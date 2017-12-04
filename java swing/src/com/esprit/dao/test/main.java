/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.test;

import com.esprit.dao.entities.Destination;
import com.esprit.implementations.DestinationDAO;
import com.esprit.implementations.PubadminDAO;
import com.esprit.implementations.UtilisateurDAO;

/**
 *
 * @author mehdikarray
 */
public class main {
    public static void main(String[] args){
      
//        System.out.println(ut.displayAllUtilisateur());
        Destination d=new Destination();
        DestinationDAO da=new DestinationDAO();
        d.setIddestination(33);
        da.evavluerDestination(5, d);
    }
    
    
}
