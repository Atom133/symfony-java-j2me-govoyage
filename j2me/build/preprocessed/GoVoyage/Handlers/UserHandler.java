/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Handlers;

import GoVoyage.Entities.Login;
import GoVoyage.Entities.Personne;
import java.util.Vector;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;

/**
 *
 * @author lenovo
 */
public class UserHandler extends DefaultHandler {
    private Vector UserVector;

    public UserHandler() {
        UserVector = new Vector();
    }
    

    public Personne[] getUser() {
        Personne[] usrTab = new Personne[UserVector.size()];
        UserVector.copyInto(usrTab);
        return usrTab;
    }
    

    String selectedBalise = "";
    Personne seclectedUser;

    public void startElement(String string, String string1, String qName, Attributes atrbts) throws SAXException {
        if (qName.equals("User")) {
            seclectedUser = new Personne();
        } else if (qName.equals("IdUser")) {
            selectedBalise = "IdUser";
        } 
        else if (qName.equals("F_Name")) {
            selectedBalise = "F_Name";
        } 
        else if (qName.equals("L_Name")) {
            selectedBalise = "L_Name";
        } 
        else if (qName.equals("Role")) {
            selectedBalise = "Role";
        } 
    }

    public void endElement(String string, String string1, String qName) throws SAXException {
        if (qName.equals("User")) {

            UserVector.addElement(seclectedUser);
            seclectedUser = null;
        } else if (qName.equals("IdUser")) {
            selectedBalise = "";
        } 
        else if (qName.equals("F_Name")) {
            selectedBalise = "";
        } 
        else if (qName.equals("L_Name")) {
            selectedBalise = "";
        } else if (qName.equals("Role")) {
            selectedBalise = "";
        } 

    }

    public void characters(char[] chars, int i, int i1) throws SAXException {
        if (seclectedUser != null) {
            if (selectedBalise.equals("IdUser")) {
                seclectedUser.setIdUser(Integer.parseInt(new String(chars, i, i1)));
                //System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("F_Name")) {
                seclectedUser.setF_Name(new String(chars, i, i1));
                //System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("L_Name")) {
                seclectedUser.setL_Name(new String(chars, i, i1));
                //System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Role")) {
                seclectedUser.setRole(new String(chars, i, i1));
                //System.out.println(new String(chars, i, i1));
            }
        }
    }

}
