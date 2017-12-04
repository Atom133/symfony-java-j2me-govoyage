/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Entities;

/**
 *
 * @author atom
 */
public class Destination {

    int id;
    String pays;
    String description;
    String ville;
    float evalution;

    public Destination() {
    }

    public Destination(int id) {
        this.id = id;
    }

    public Destination(String pays, String ville) {
        this.pays = pays;
        this.ville = ville;
    }

    public Destination(String pays, String description, String ville, float evalution) {
        this.pays = pays;
        this.description = description;
        this.ville = ville;
        this.evalution = evalution;
    }

   

    public Destination(int id, String pays, String description, String ville, float evalution) {
        this.id = id;
        this.pays = pays;
        this.description = description;
        this.ville = ville;
        this.evalution = evalution;
    }


    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
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

    public String getVille() {
        return ville;
    }

    public void setVille(String ville) {
        this.ville = ville;
    }

    public float getEvalution() {
        return evalution;
    }

    public void setEvalution(float evalution) {
        this.evalution = evalution;
    }

}
