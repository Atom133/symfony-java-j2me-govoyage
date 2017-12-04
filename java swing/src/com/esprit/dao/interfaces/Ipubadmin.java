/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;

import com.esprit.dao.entities.Pubadmin;
import java.util.List;

/**
 *
 * @author mehdikarray
 */
public interface Ipubadmin {
     List<Pubadmin> DisplayPubadmin();
     void  deletePubadmmin (int id);
     void  validerPubadmin(Pubadmin pubadmin);
     Pubadmin findById(int id);
}
