/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Handlers;

import GoVoyage.Entities.Experience;
import java.util.Vector;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;

/**
 *
 * @author lenovo
 */
public class AdminExpHandler extends DefaultHandler {

    private Vector ExperienceVector;

    public AdminExpHandler() {
        ExperienceVector = new Vector();
    }

    public Experience[] getExperience() {
        Experience[] expTab = new Experience[ExperienceVector.size()];
        ExperienceVector.copyInto(expTab);
        return expTab;
    }

    String selectedBalise = "";
    Experience seclectedExperience;

    public void startElement(String string, String string1, String qName, Attributes atrbts) throws SAXException {
        if (qName.equals("Experience")) {
            seclectedExperience = new Experience();
        } else if (qName.equals("IdExp")) {
            selectedBalise = "IdExp";
        } else if (qName.equals("Title")) {
            selectedBalise = "Title";
        } else if (qName.equals("Date")) {
            selectedBalise = "Date";
        } else if (qName.equals("Reports")) {
            selectedBalise = "Reports";
        }
    }

    public void endElement(String string, String string1, String qName) throws SAXException {
        if (qName.equals("Experience")) {

            ExperienceVector.addElement(seclectedExperience);
            seclectedExperience = null;
        } else if (qName.equals("IdExp")) {
            selectedBalise = "";
        } else if (qName.equals("Title")) {
            selectedBalise = "";
        } else if (qName.equals("Date")) {
            selectedBalise = "";
        } else if (qName.equals("Reports")) {
            selectedBalise = "";
        }

    }

    public void characters(char[] chars, int i, int i1) throws SAXException {
        if (seclectedExperience != null) {
            if (selectedBalise.equals("IdExp")) {
                seclectedExperience.setId(Integer.parseInt(new String(chars, i, i1)));
            }
            if (selectedBalise.equals("Title")) {
                seclectedExperience.setTitle(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Date")) {
                seclectedExperience.setDate(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Reports")) {
                seclectedExperience.setReports(Integer.parseInt(new String(chars, i, i1)));
            }
        }
    }

}
