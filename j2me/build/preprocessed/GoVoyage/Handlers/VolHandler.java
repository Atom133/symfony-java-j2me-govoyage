/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.Handlers;

import java.util.Vector;
import org.xml.sax.Attributes;
import org.xml.sax.SAXException;
import org.xml.sax.helpers.DefaultHandler;
import GoVoyage.Entities.Vol;

/**
 *
 * @author SASSOU
 */
public class VolHandler extends DefaultHandler{
     private Vector volVector;
     
    public VolHandler() {
        volVector = new Vector();
    }

    public Vol[] getVol() {
        Vol[] vol = new Vol[volVector.size()];
        volVector.copyInto(vol);
        return vol;
    }

    String selectedBalise = "";
    Vol seclectedVol;

    public void startElement(String string, String string1, String qName, Attributes atrbts) throws SAXException {
        if (qName.equals("vol")) {
            seclectedVol = new Vol();
        } else if (qName.equals("id")) {
            selectedBalise = "id";
        } else if (qName.equals("dateDepart")) {
            selectedBalise = "dateDepart";
        } else if (qName.equals("dateArrivee")) {
            selectedBalise = "dateArrivee";
        } else if (qName.equals("heureDepart")) {
            selectedBalise = "heureDepart";
        }else if (qName.equals("heureArrivee")) {
            selectedBalise = "heureArrivee";
        }else if (qName.equals("nbrePassagers")) {
            selectedBalise = "nbrePassagers";
        }else if (qName.equals("companie")) {
        }else if (qName.equals("prixBillet")) {
            selectedBalise = "prixBillet";
        }else if (qName.equals("classeBillet")) {
            selectedBalise = "classeBillet";
        }else if (qName.equals("aereportDepart")) {
            selectedBalise = "aereportDepart";
        }else if (qName.equals("aeroportArrivee")) {
            selectedBalise = "aeroportArrivee";
        
    }

    }

    public void endElement(String string, String string1, String qName) throws SAXException {
        if (qName.equals("vol")) {

            volVector.addElement(seclectedVol);
            seclectedVol = null;
        } else if (qName.equals("id")) {
            selectedBalise = "";
        } else if (qName.equals("dateDepart")) {
            selectedBalise = "";
        } else if (qName.equals("dateArrivee")) {
            selectedBalise = "";
        } else if (qName.equals("heureDepart")) {
            selectedBalise = "";
        }else if (qName.equals("heureArrivee")) {
            selectedBalise = "";
        }else if (qName.equals("nbrePassagers")) {
            selectedBalise = "";
        }else if (qName.equals("companie")) {
            selectedBalise = "";
        }else if (qName.equals("prixBillet")) {
            selectedBalise = "";
        }else if (qName.equals("classeBillet")) {
            selectedBalise = "";
        }else if (qName.equals("aereportDepart")) {
            selectedBalise = "";
        }else if (qName.equals("aeroportArrivee")) {
            selectedBalise = "";
        
    }
    }

    public void characters(char[] chars, int i, int i1) throws SAXException {
        if (seclectedVol != null) {
            if (selectedBalise.equals("id")) {
                seclectedVol.setId(Integer.parseInt(new String(chars, i, i1)));
                System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("dateDepart")) {
                seclectedVol.setDateDepart(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("dateArrivee")) {
                seclectedVol.setDateArrivee(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
            if (selectedBalise.equals("heureDepart")) {
                seclectedVol.setHeureDepart(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
             if (selectedBalise.equals("heureArrivee")) {
                seclectedVol.setHeureArrivee(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
              if (selectedBalise.equals("nbrePassagers")) {
                seclectedVol.setNbrePassagers(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            } if (selectedBalise.equals("companie")) {
                seclectedVol.setCompanie(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
             if (selectedBalise.equals("prixBillet")) {
                seclectedVol.setPrixBillet(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
              if (selectedBalise.equals("classeBillet")) {
                seclectedVol.setClasseBillet(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
               if (selectedBalise.equals("arroportDepart")) {
                seclectedVol.setArroportDepart(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
                   if (selectedBalise.equals("aeroportArrivee")) {
                seclectedVol.setAeroportArrivee(new String(chars, i, i1));
                System.out.println(new String(chars, i, i1));
            }
        }
    }
    
}
