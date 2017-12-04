/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.DAOs;

import GoVoyage.Handlers.ForumHandler;
import GoVoyage.Entities.Forum;
import GoVoyage.Entities.Login;
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
 * @author sawsse
 */
public class ForumDAO {
    Forum[] forums;
   
    
    public boolean insert(Forum forum){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/forum/insert.php?titre="+forum.getTitle()+"&contenu="+forum.getContenu()+"&usr="+Login.idUser);
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
    
   public Forum[] select(){
       try {
            ForumHandler forumHandler = new ForumHandler();
            // get a parser object
            SAXParser SAXparser = SAXParserFactory.newInstance().newSAXParser();
            // get an InputStream from somewhere (could be HttpConnection, for example)
            HttpConnection hc = (HttpConnection) Connector.open("http://localhost/GoVoyage_php/forum/select.php");//people.xml est un exemple
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            SAXparser.parse(dis, forumHandler);
            // display the result
            forums = forumHandler.getForum();
             return forums;
        } catch (ParserConfigurationException ex) {
            ex.printStackTrace();
        } catch (SAXException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        }

             return null;
   }
   
   
    public boolean delete(String title){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/forum/delete.php?title="+title+"&usr="+Login.idUser);
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
    
    
    public boolean modify(String old_title, String title, String cont){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/forum/modify.php?old_title="+old_title+"&title="+title+"&cont="+cont+"&usr="+Login.idUser);
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
    
    
    
    
}
