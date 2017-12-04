/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.interfaces;

import com.esprit.dao.entities.Media;
import java.util.List;

/**
 *
 * @author Amina
 */
public interface IMediaDAO {
    void insertMedia(Media md);
    void deleteMedia (int id);
    void modifierMedia (Media md); 
    Media findById(int id);
    Media findByUrl(String url);
    List<Media> displayAllMedia();
}
