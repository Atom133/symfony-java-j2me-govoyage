/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Handlers;

import GoVoyage.Entities.Forum;
import java.util.Vector;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;

/**
 *
 * @author sawsse
 */
public class ForumHandler extends DefaultHandler {

    private Vector forumVector;

    public ForumHandler() {
        forumVector = new Vector();
    }

    public Forum[] getForum() {
        Forum[] Tab = new Forum[forumVector.size()];
        forumVector.copyInto(Tab);
        return Tab;
    }

    String selectedBalise = "";
    Forum seclectedForum;

    public void startElement(String string, String string1, String qName, Attributes atrbts) throws SAXException {
        if (qName.equals("Forum")) {
            seclectedForum = new Forum();
        } else if (qName.equals("IdForum")) {
            selectedBalise = "IdForum";
        } else if (qName.equals("Titre")) {
            selectedBalise = "Titre";
        } else if (qName.equals("Contenu")) {
            selectedBalise = "Contenu";
        } 
    }

    public void endElement(String string, String string1, String qName) throws SAXException {
        if (qName.equals("Forum")) {

            forumVector.addElement(seclectedForum);
            seclectedForum = null;
        } else if (qName.equals("IdForum")) {
            selectedBalise = "";
        } else if (qName.equals("Titre")) {
            selectedBalise = "";
        } else if (qName.equals("Contenu")) {
            selectedBalise = "";
        } 
        
    }

    public void characters(char[] chars, int i, int i1) throws SAXException {
        if (seclectedForum != null) {
            if (selectedBalise.equals("IdForum")) {
                seclectedForum.setId(Integer.parseInt(new String(chars, i, i1)));
                System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Titre")) {
                seclectedForum.setTitle(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Contenu")) {
                seclectedForum.setContenu(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
            
        }
    }

}