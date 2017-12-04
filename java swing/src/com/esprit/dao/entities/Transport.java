/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.entities;

/**
 *
 * @author Sony
 */
public class Transport implements Comparable<Transport>{
    int id;
    String type;
    String compagnie;
    String pays;
    String description;
    float evaluation;

    public Transport(int idtransport, String type, String compagnie, String pays, String description) {
        this.id = idtransport;
        this.type = type;
        this.compagnie = compagnie;
        this.pays = pays;
        this.description = description;
        this.evaluation=0;
    }

    public int getIdtransport() {
        return id;
    }

    public void setIdtransport(int idtransport) {
        this.id = idtransport;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getCompagnie() {
        return compagnie;
    }

    public void setCompagnie(String compagnie) {
        this.compagnie = compagnie;
    }

    public String getPays() {
        return pays;
    }

    public void setPays(String pays) {
        this.pays = pays;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public float getEvaluation() {
        return evaluation;
    }

    public void setEvaluation(int evaluation) {
        this.evaluation = evaluation;
    }

    public Transport() {
    }

    @Override
    public String toString() {
        return "Transport{" + "type=" + type + ", compagnie=" + compagnie + ", pays=" + pays + ", description=" + description + ", evaluation=" + evaluation + '}';
    }


    @Override
    public int compareTo(Transport o) {
         float p=o.getEvaluation()-this.getEvaluation();
        if(p==0)
            return  o.getCompagnie().compareTo(this.getCompagnie());
         else
       return ((int)p );
    }

   

    

  
   
    
    
    
}
