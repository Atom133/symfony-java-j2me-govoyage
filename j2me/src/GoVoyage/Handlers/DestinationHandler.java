/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Handlers;

import GoVoyage.Entities.Destination;
import java.util.Vector;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;

/**
 *
 * @author damine
 */
public class DestinationHandler extends DefaultHandler {

    private Vector destinationVector;

    public DestinationHandler() {
        destinationVector = new Vector();
    }

    public Destination[] getDestination() {
        Destination[] personTab = new Destination[destinationVector.size()];
        destinationVector.copyInto(personTab);
        return personTab;
    }

    String selectedBalise = "";
    Destination seclectedMatch;

    public void startElement(String string, String string1, String qName, Attributes atrbts) throws SAXException {
        if (qName.equals("destination")) {
            seclectedMatch = new Destination();
        } else if (qName.equals("IdDestination")) {
            selectedBalise = "IdDestination";
        } else if (qName.equals("Pays")) {
            selectedBalise = "Pays";
        } else if (qName.equals("Description")) {
            selectedBalise = "Description";
        } else if (qName.equals("Ville")) {
            selectedBalise = "Ville";
        }
         else if (qName.equals("Evaluation")) {
            selectedBalise = "Evaluation";
        }
    }

    public void endElement(String string, String string1, String qName) throws SAXException {
        if (qName.equals("destination")) {

            destinationVector.addElement(seclectedMatch);
            seclectedMatch = null;
        } else if (qName.equals("IdDestination")) {
            selectedBalise = "IdDestination";
        } else if (qName.equals("Pays")) {
            selectedBalise = "Pays";
        } else if (qName.equals("Description")) {
            selectedBalise = "Description";
        } else if (qName.equals("Ville")) {
            selectedBalise = "Ville";
        } else if (qName.equals("Evaluation")) {
            selectedBalise = "Evaluation";
        }
        
    }

    public void characters(char[] chars, int i, int i1) throws SAXException {
        if (seclectedMatch != null) {
            if (selectedBalise.equals("IdDestination")) {
                seclectedMatch.setId(Integer.parseInt(new String(chars, i, i1)));
                System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Pays")) {
                seclectedMatch.setPays(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Description")) {
                seclectedMatch.setDescription(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Ville")) {
                seclectedMatch.setVille(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Evaluation")) {
                seclectedMatch.setEvalution(Float.parseFloat(new String(chars, i, i1)));
                System.out.println(new String(chars, i, i1));
            }
        }
    }

}
