/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.DAOs;


import GoVoyage.Entities.Hotel;
import GoVoyage.Handlers.HotHandler;
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
public class HotelDAO {
    
    Hotel[] hotels;
    
    public boolean insert(Hotel hotel){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/hotel/hot_insert.php?nom="+hotel.getNom()+"&ville="+hotel.getVille()+"&etoiles="+hotel.getEtoiles()+"&adresse="+hotel.getAdresse()+"&prix_nuit="+hotel.getPrix_nuit()+"&description="+hotel.getDescription());
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
    
    
    public boolean delete(String nom){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/hotel/hot_delete.php?nom="+nom);
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
    
        public boolean modify(String old_nom, String nom, int etoiles, Double prix_nuit, String desc){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/hotel/hot_modify.php?old_nom="+old_nom+"&nom="+nom+"&etoiles="+etoiles+"&prix_nuit="+prix_nuit+"&desc="+desc);
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
    
   public Hotel[] select(){
       try {
            HotHandler hotHandler = new HotHandler();
            // get a parser object
            SAXParser SAXparser = SAXParserFactory.newInstance().newSAXParser();
            // get an InputStream from somewhere (could be HttpConnection, for example)
            HttpConnection hc = (HttpConnection) Connector.open("http://localhost/GoVoyage_php/hotel/hot_select.php");//people.xml est un exemple
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            SAXparser.parse(dis, hotHandler);
            // display the result
            hotels = hotHandler.getHotel();
             return hotels;
        } catch (ParserConfigurationException ex) {
            ex.printStackTrace();
        } catch (SAXException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        }

             return null;
   }
    
    public Hotel[] find(String nom){
        //System.out.println(nom);
       try {
            HotHandler hotHandler = new HotHandler();
            // get a parser object
            SAXParser SAXparser = SAXParserFactory.newInstance().newSAXParser();
            // get an InputStream from somewhere (could be HttpConnection, for example)
            //System.out.println(nom);
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/hotel/hot_find.php?nom="+nom);//people.xml est un exemple
            //System.out.println(nom);
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            SAXparser.parse(dis, hotHandler);
            // display the result
            hotels = hotHandler.getHotel();
             return hotels;
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
