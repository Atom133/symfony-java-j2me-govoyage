/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Entities;

/**
 *
 * @author lenovo
 */
public class Response {
   private int id;
   // private int userId ;
    private String response ;

    public Response(int id, String response) {
        this.id = id;
        this.response = response;
    }
    
     public Response(String response) {
        this.response = response;
    }

    public Response() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getResponse() {
        return response;
    }

    public void setResponse(String response) {
        this.response = response;
    }
    
    
}
