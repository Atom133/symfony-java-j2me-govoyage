/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Handlers;

import GoVoyage.Entities.Hotel;
import java.util.Vector;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;

/**
 *
 * @author lenovo
 */
public class HotHandler extends DefaultHandler {

    private Vector HotelVector;

    public HotHandler() {
        HotelVector = new Vector();
    }

    public Hotel[] getHotel() {
        Hotel[] personTab = new Hotel[HotelVector.size()];
        HotelVector.copyInto(personTab);
        return personTab;
    }

    String selectedBalise = "";
    Hotel seclectedHotel;

    public void startElement(String string, String string1, String qName, Attributes atrbts) throws SAXException {
        if (qName.equals("Hotel")) {
            seclectedHotel = new Hotel();
        } else if (qName.equals("IdHotel")) {
            selectedBalise = "IdHotel";
        } else if (qName.equals("Nom")) {
            selectedBalise = "Nom";
        } else if (qName.equals("Ville")) {
            selectedBalise = "Ville";
        } else if (qName.equals("Etoiles")) {
            selectedBalise = "Etoiles";
        } else if (qName.equals("Adresse")) {
            selectedBalise = "Adresse";
        } else if (qName.equals("Prix_nuit")) {
            selectedBalise = "Prix_nuit";
        } else if (qName.equals("Description")) {
            selectedBalise = "Description";
        }
    }

    public void endElement(String string, String string1, String qName) throws SAXException {
        if (qName.equals("Hotel")) {

            HotelVector.addElement(seclectedHotel);
            seclectedHotel = null;
        } else if (qName.equals("IdHotel")) {
            selectedBalise = "";
        } else if (qName.equals("Nom")) {
            selectedBalise = "";
        } else if (qName.equals("Ville")) {
            selectedBalise = "";
        } else if (qName.equals("Etoiles")) {
            selectedBalise = "";
        } else if (qName.equals("Adresse")) {
            selectedBalise = "";
        } else if (qName.equals("Prix_nuit")) {
            selectedBalise = "";
        } else if (qName.equals("Description")) {
            selectedBalise = "";
        }

    }

    public void characters(char[] chars, int i, int i1) throws SAXException {
        if (seclectedHotel != null) {
            if (selectedBalise.equals("IdHotel")) {
                seclectedHotel.setId(Integer.parseInt(new String(chars, i, i1)));
                //System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Nom")) {
                seclectedHotel.setNom(new String(chars, i, i1));
                //System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Ville")) {
                seclectedHotel.setVille(new String(chars, i, i1));
                //System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Etoiles")) {
                seclectedHotel.setEtoiles(Integer.parseInt(new String(chars, i, i1)));
               // System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Adresse")) {
                seclectedHotel.setAdresse(new String(chars, i, i1));
                //System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Prix_nuit")) {
                seclectedHotel.setPrix_nuit(Double.valueOf(new String(chars, i, i1)));
                //System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Description")) {
                seclectedHotel.setDescription(new String(chars, i, i1));
                //System.out.println(new String(chars, i, i1));
            }
        }
    }

}
