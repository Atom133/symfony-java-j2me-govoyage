/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.DAOs;

import GoVoyage.Handlers.*;
import GoVoyage.Entities.*;
import GoVoyage.GUIs.*;
import java.io.DataInputStream;
import java.io.IOException;
import javax.microedition.io.Connector;
import javax.microedition.io.HttpConnection;
import javax.xml.parsers.ParserConfigurationException;
import javax.xml.parsers.SAXParser;
import javax.xml.parsers.SAXParserFactory;
import org.xml.sax.SAXException;

/**
 *
 * @author lenovo
 */
public class ResponseDAO {
        Response[] responses;
   
    
    public boolean insert(Response response){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/forum/insert_response.php?response="+response.getResponse()+"&id_post="+ForumList.id_forum+"&usr="+Login.idUser);
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
           StringBuffer sb = new StringBuffer();
           int ch;
            while ((ch = dis.read())!=-1) {
                sb.append((char)ch);                
            }
            if (sb.toString().trim().equals("success")) {
                return true;
            }
            
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        return false;
    }
    
   public Response[] select(){
       try {
            ResponseHandler responseHandler = new ResponseHandler();
            // get a parser object
            SAXParser SAXparser = SAXParserFactory.newInstance().newSAXParser();
            // get an InputStream from somewhere (could be HttpConnection, for example)
            HttpConnection hc = (HttpConnection) Connector.open("http://localhost/GoVoyage_php/forum/select_response.php?id="+ForumList.id_forum);//people.xml est un exemple
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            SAXparser.parse(dis, responseHandler);
            // display the result
            responses = responseHandler.getResponses();
             return responses;
        } catch (ParserConfigurationException ex) {
            ex.printStackTrace();
        } catch (SAXException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        }

             return null;
   }
   
   
    public boolean delete(String res){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/forum/delete_response.php?res="+res+"&usr="+Login.idUser);
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
           StringBuffer sb = new StringBuffer();
            System.out.println(Login.idUser);
           int ch;
            while ((ch = dis.read())!=-1) {
                sb.append((char)ch);                
            }
            if (sb.toString().trim().equals("success")) {
                return true;
            }
            
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        return false;
    }

    
    
}
