/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Handlers;


import GoVoyage.Entities.Response;
import java.util.Vector;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;

/**
 *
 * @author lenovo
 */
public class ResponseHandler  extends DefaultHandler {

    private Vector responseVector;

    public ResponseHandler() {
        responseVector = new Vector();
    }

    public Response[] getResponses() {
        Response[] Tab = new Response[responseVector.size()];
        responseVector.copyInto(Tab);
        return Tab;
    }

    String selectedBalise = "";
    Response seclectedResponse;

    public void startElement(String string, String string1, String qName, Attributes atrbts) throws SAXException {
        if (qName.equals("Response")) {
            seclectedResponse = new Response();
        } else if (qName.equals("IdResponse")) {
            selectedBalise = "IdResponse";
        } else if (qName.equals("Responses")) {
            selectedBalise = "Responses";
        } 
    }

    public void endElement(String string, String string1, String qName) throws SAXException {
        if (qName.equals("Response")) {

            responseVector.addElement(seclectedResponse);
            seclectedResponse = null;
        } else if (qName.equals("IdResponse")) {
            selectedBalise = "";
        } else if (qName.equals("Responses")) {
            selectedBalise = "";
        } 
    }

    public void characters(char[] chars, int i, int i1) throws SAXException {
        if (seclectedResponse != null) {
            if (selectedBalise.equals("IdResponse")) {
                seclectedResponse.setId(Integer.parseInt(new String(chars, i, i1)));
                System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("Responses")) {
                seclectedResponse.setResponse(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
            
            
        }
    }

}