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

public class Recommandation extends Publication {
      String description_recommandation;
      String pays_recommandation;
      Hotel hotel;
      Restaurent restaurent;
      Transport transport;
      Destination destination;
      LocationVacance locationv;

    public Recommandation() {
    }
      

    public Recommandation(String description_recommandation, String pays_recommandation,Destination destination,Fos_user user) {
        super("recommandationdestination", user);
        this.description_recommandation = description_recommandation;
        this.pays_recommandation = destination.getPays();
       
      
        this.destination = destination;
                
    }
    public Recommandation(String description_recommandation, String pays_recommandation,  Transport transport,Fos_user user) {
        super("recommandationtransport", user);
        this.description_recommandation = description_recommandation;
        this.pays_recommandation =transport.getPays();
      
        this.transport = transport;
     
                
    }

    public Recommandation(String description_recommandation, String pays_recommandation, Hotel hotel, Fos_user user) {
        super("recommandationhotel", user);
        this.description_recommandation = description_recommandation;
        this.pays_recommandation =hotel.getPays();
        this.hotel = hotel;
    }

    public Recommandation(String pays_recommandation, LocationVacance locationv, Fos_user user) {
        super("recommandationlocation", user);
        this.pays_recommandation = locationv.getPays();
        this.locationv = locationv;
        
    }

    public Recommandation(String description_recommandation, Restaurent restaurent, Fos_user user) {
        super("recommandationrestaurent", user);
        this.description_recommandation = description_recommandation;
        this.restaurent = restaurent;
        this.pays_recommandation = restaurent.getPays();
    }

    public LocationVacance getLocationv() {
        return locationv;
    }

    public void setLocationv(LocationVacance locationv) {
        this.locationv = locationv;
    }
    

    public String getDescription_recommandation() {
        return description_recommandation;
    }

    public void setDescription_recommandation(String description_recommandation) {
        this.description_recommandation = description_recommandation;
    }

    public String getPays_recommandation() {
        return pays_recommandation;
    }

    public void setPays_recommandation(String pays_recommandation) {
        this.pays_recommandation = pays_recommandation;
    }

    public Hotel getHotel() {
        return hotel;
    }

    public void setHotel(Hotel hotel) {
        this.hotel = hotel;
    }

    public Restaurent getRestaurent() {
        return restaurent;
    }

    public void setRestaurent(Restaurent restaurent) {
        this.restaurent = restaurent;
    }

    public Transport getTransport() {
        return transport;
    }

    public void setTransport(Transport transport) {
        this.transport = transport;
    }

    public Destination getDestination() {
        return destination;
    }

    public void setDestination(Destination destination) {
        this.destination = destination;
    }

    public List<Media> getList_media() {
        return list_media;
    }

    public void setList_media(List<Media> list_media) {
        this.list_media = list_media;
    }

    public int getIdpublication() {
        return id;
    }

    public void setIdpublication(int idpublication) {
        this.id = idpublication;
    }

    public String getType_publication() {
        return type_publication;
    }

    public void setType_publication(String type_publication) {
        this.type_publication = type_publication;
    }

    public int getPublie() {
        return publie;
    }

    public void setPublie(int publie) {
        this.publie = publie;
    }

    public Fos_user getUser() {
        return user;
    }

    public void setUser(Fos_user user) {
        this.user = user;
    }

    @Override
    public String toString() {
        return "Recommandation{" + "description_recommandation=" + description_recommandation + ", pays_recommandation=" + pays_recommandation + ", transport=" +transport+ '}';
    }

   

    
   
    }

   
      
    

