/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Entities;

/**
 *
 * @author sawsse
 */
public class Forum {
    
    private int id;
   // private int userId ;
    private String contenu ;
    private String title ;

    public Forum(int id, String contenu, String title) {
        this.id = id;
        this.contenu = contenu;
        this.title = title;
    }
    
     public Forum(String title, String contenu) {
        this.contenu = contenu;
        this.title = title;
    }

    public Forum() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getContenu() {
        return contenu;
    }

    public void setContenu(String contenu) {
        this.contenu = contenu;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }
    
    
    
}
