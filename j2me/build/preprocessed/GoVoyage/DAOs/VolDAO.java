/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.DAOs;

import java.io.DataInputStream;
import java.io.IOException;
import javax.microedition.io.Connector;
import javax.microedition.io.HttpConnection;
import javax.xml.parsers.ParserConfigurationException;
import javax.xml.parsers.SAXParser;
import javax.xml.parsers.SAXParserFactory;
import org.xml.sax.SAXException;
import GoVoyage.Handlers.VolHandler;
import GoVoyage.Entities.Vol;

/**
 *
 * @author SASSOU
 */
public class VolDAO {
    Vol [] vol;
       public boolean insert(Vol vol){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/vol/insert.php?dateDepart="+vol.getDateDepart()+"&dateArrivee="+vol.getDateArrivee()+"&heureDepart="+vol.getHeureDepart()+"&heureArrivee="+vol.getHeureArrivee()+"&nbrePassagers="+vol.getNbrePassagers()+"&companie="+vol.getCompanie()+"&prixBillet="+vol.getPrixBillet()+"&classeBillet="+vol.getClasseBillet()+"&aereportDepart="+vol.getAereportDepart()+"&aeroportArrivee="+vol.getAeroportArrivee());
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
           StringBuffer sb = new StringBuffer();
           int ch;
            while ((ch = dis.read())!=-1) {
                sb.append((char)ch);                
            }
            if (sb.toString().trim().equals("ajout effectuée")) {
                return true;
            }
            
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        return false;
    }
 public Vol[] select(){
       try {
            VolHandler volHandler = new VolHandler();
            // get a parser object
            SAXParser SAXparser = SAXParserFactory.newInstance().newSAXParser();
            // get an InputStream from somewhere (could be HttpConnection, for example)
            HttpConnection hc = (HttpConnection) Connector.open("http://localhost/GoVoyage_php/vol/select.php");//people.xml est un exemple
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            SAXparser.parse(dis, volHandler);
            // display the result
            vol = volHandler.getVol();
             return vol;
        } catch (ParserConfigurationException ex) {
            ex.printStackTrace();
        } catch (SAXException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        }

             return null;
   }
   public boolean delete(String dateDepart){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/vol/delete.php?dateDepart="+dateDepart);
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
       public boolean modify(String old_dateDepart,String dateDepart, String dateArrivee , String heureDepart, String heureArrivee, String nbrePassagers, String companie, String prixBillet, String classeBillet, String aereportDepart, String aeroportArrivee   ){
        try {
            HttpConnection hc = (HttpConnection)Connector.open("http://localhost/GoVoyage_php/vol/update.php?old_dateDepart="+old_dateDepart+"&dateDepart="+dateDepart+"&dateArrivee="+dateArrivee+"&heureDepart="+heureDepart+"&heureArrivee="+heureArrivee+"&nbrePassagers="+nbrePassagers+"&companie="+companie+"&prixBillet="+prixBillet+"&classeBillet="+classeBillet+"&aereportDepart="+aereportDepart+"&aeroportArrivee="+aeroportArrivee);
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
