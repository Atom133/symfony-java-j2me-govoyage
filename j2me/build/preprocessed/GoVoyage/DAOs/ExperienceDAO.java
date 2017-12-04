/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.DAOs;

import GoVoyage.Entities.Experience;
import GoVoyage.Entities.Login;
import GoVoyage.Handlers.AdminExpHandler;
import GoVoyage.Handlers.ExpHandler;
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
public class ExperienceDAO {
    
    Experience[] experiences;
    Experience[] adminExperiences;
    
    public boolean insert(Experience experience){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/experience/exp_insert.php?title="+experience.getTitle()+"&dest="+experience.getDestination()+"&date="+experience.getDate()+"&note="+experience.getNote()+"&desc="+experience.getDescription()+"&usr="+Login.idUser);
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
    
    
    public boolean delete(String title){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/experience/exp_delete.php?title="+title+"&usr="+Login.idUser);
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
    
    public boolean AdminDelete(String title){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/experience/exp_AdminDelete.php?title="+title);
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
    
        public boolean modify(String old_title, String title, String dest, int note, String desc){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/experience/exp_modify.php?old_title="+old_title+"&title="+title+"&dest="+dest+"&note="+note+"&desc="+desc+"&usr="+Login.idUser);
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
    
   public Experience[] select(){
       try {
            ExpHandler expHandler = new ExpHandler();
            // get a parser object
            SAXParser SAXparser = SAXParserFactory.newInstance().newSAXParser();
            // get an InputStream from somewhere (could be HttpConnection, for example)
            HttpConnection hc = (HttpConnection) Connector.open("http://localhost/GoVoyage_php/experience/exp_select.php");//people.xml est un exemple
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            SAXparser.parse(dis, expHandler);
            // display the result
            experiences = expHandler.getExperience();
             return experiences;
        } catch (ParserConfigurationException ex) {
            ex.printStackTrace();
        } catch (SAXException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        }

             return null;
   }
    
   
    public Experience[] AdminSelect(){
       try {
            AdminExpHandler adminExpHandler = new AdminExpHandler();
            // get a parser object
            SAXParser SAXparser = SAXParserFactory.newInstance().newSAXParser();
            // get an InputStream from somewhere (could be HttpConnection, for example)
            HttpConnection hc = (HttpConnection) Connector.open("http://localhost/GoVoyage_php/experience/exp_AdminSelect.php");//people.xml est un exemple
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            SAXparser.parse(dis, adminExpHandler);
            // display the result
            adminExperiences = adminExpHandler.getExperience();
             return adminExperiences;
        } catch (ParserConfigurationException ex) {
            ex.printStackTrace();
        } catch (SAXException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        }

             return null;
   }
    
}
