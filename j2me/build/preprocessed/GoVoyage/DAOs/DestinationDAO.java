/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.DAOs;

import GoVoyage.Entities.Destination;
import GoVoyage.Handlers.DestinationHandler;
import java.io.DataInputStream;
import java.io.IOException;
import java.io.UnsupportedEncodingException;

import javax.microedition.io.Connector;
import javax.microedition.io.HttpConnection;
import javax.xml.parsers.ParserConfigurationException;
import javax.xml.parsers.SAXParser;
import javax.xml.parsers.SAXParserFactory;
import org.xml.sax.SAXException;

/**
 *
 * @author atom
 */
public class DestinationDAO {

    Destination[] destinations;

    public boolean insert(Destination destination) {
        try {
            String url = "http://localhost/pidev1/insert.php?ville=" + destination.getVille() + "&pays=" + destination.getPays() + "&desc=" + destination.getDescription() + "&eval=" + destination.getEvalution();
            HttpConnection hc = (HttpConnection) Connector.open(url);
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            StringBuffer sb = new StringBuffer();
            int ch;
            while ((ch = dis.read()) != -1) {
                sb.append((char) ch);
            }
            if (sb.toString().trim().equals("success")) {
                return true;
            }

        } catch (IOException ex) {
            ex.printStackTrace();
        }
        return false;
    }

    public Destination[] select() {
        try {
            DestinationHandler destHandler = new DestinationHandler();
            // get a parser object
            SAXParser SAXparser = SAXParserFactory.newInstance().newSAXParser();
            // get an InputStream from somewhere (could be HttpConnection, for example)
            HttpConnection hc = (HttpConnection) Connector.open("http://localhost/pidev1/select.php");//people.xml est un exemple
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            SAXparser.parse(dis, destHandler);
            // display the result
            destinations = destHandler.getDestination();
            return destinations;
        } catch (ParserConfigurationException ex) {
            ex.printStackTrace();
        } catch (SAXException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        }

        return null;
    }

    public boolean update(Destination destination) {
        try {
            String url = "http://localhost/pidev1/update.php?id=" + destination.getId() + "&ville=" + destination.getVille() + "&pays=" + destination.getPays() + "&desc=" + destination.getDescription() + "&eval=" + destination.getEvalution();
            String validUrl = this.replace(url, " ", "+");
            System.out.println(validUrl);

            HttpConnection hc = (HttpConnection) Connector.open(url);

            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            StringBuffer sb = new StringBuffer();
            int ch;
            while ((ch = dis.read()) != -1) {
                sb.append((char) ch);
            }
            if (sb.toString().trim().equals("success")) {
                return true;
            }

        } catch (IOException ex) {
            ex.printStackTrace();
        }
        return false;
    }
//            String url = "http://localhost/pidev1/search.php?pays="+destination.getPays()+"$ville="+ destination.getVille();

    public Destination[] search(String pays, String ville) {
        try {
            DestinationHandler destHandler = new DestinationHandler();
            // get a parser object
            SAXParser SAXparser = SAXParserFactory.newInstance().newSAXParser();
            // get an InputStream from somewhere (could be HttpConnection, for example)
            String url = "http://localhost/pidev1/search.php?pays=" + pays + "&ville=" + ville;
            System.out.println(url);
            HttpConnection hc = (HttpConnection) Connector.open(url);//people.xml est un exemple
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            SAXparser.parse(dis, destHandler);
            // display the result
            destinations = destHandler.getDestination();
            return destinations;
        } catch (ParserConfigurationException ex) {
            ex.printStackTrace();
        } catch (SAXException ex) {
            ex.printStackTrace();
        } catch (IOException ex) {
            ex.printStackTrace();
        }

        return null;
    }

    public boolean delete(int id) {
        try {

            String url = "http://localhost/pidev1/delete.php?id="+id;
            System.out.println("***************");
            System.out.println(url);
            HttpConnection hc = (HttpConnection) Connector.open(url);//people.xml est un exemple
            DataInputStream dis = new DataInputStream(hc.openDataInputStream());
            StringBuffer sb = new StringBuffer();
            int ch;
            while ((ch = dis.read()) != -1) {
                sb.append((char) ch);
            }
            if (sb.toString().trim().equals("success")) {
                return true;
            }

        } catch (IOException ex) {
            ex.printStackTrace();
        }
        return false;
    }

    private String replace(String str, String pattern, String replace) {
        int s = 0;
        int e = 0;
        StringBuffer result = new StringBuffer();

        while ((e = str.indexOf(pattern, s)) >= 0) {
            result.append(str.substring(s, e));
            result.append(replace);
            s = e + pattern.length();
        }
        result.append(str.substring(s));
        return result.toString();
    }
}
