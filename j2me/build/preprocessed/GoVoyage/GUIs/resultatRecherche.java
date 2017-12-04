/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.HotelDAO;
import GoVoyage.Entities.Hotel;
import javax.microedition.lcdui.*;

/**
 *
 * @author lenovo
 */
public class resultatRecherche extends List implements CommandListener,Runnable{
    public static String str;
    Command cmdAdd = new Command("Add", Command.SCREEN, 0);
    Command cmdSearch = new Command("search", Command.SCREEN, 0);
    Command cmdExit = new Command("Back", Command.EXIT, 0);
    Command cmdrec = new Command("Contact Us", Command.SCREEN, 0);
    
    public resultatRecherche(String cible) {
       
        super("Hotel's List", List.IMPLICIT);
        addCommand(cmdAdd);
        addCommand(cmdSearch);
        str=cible;
        addCommand(cmdExit);
        addCommand(cmdrec);
        setCommandListener(this);
        Thread th = new Thread(this);
        th.start();
        
    }

    public void commandAction(Command c, Displayable d) {
        if (c ==  cmdrec) {
            Midlet.INSTANCE.disp.setCurrent(new Sms() );
        }
        /*-----------------------------------------------------------------------------------------------------------------------------------*/
        if (c == cmdAdd) {
            Midlet.INSTANCE.disp.setCurrent(new HotAdd());
        }
        /*--------------------------------------------------------------------------------------------------------------------------*/
        if (c == cmdExit) {
           Midlet.INSTANCE.disp.setCurrent(new HotList());
        }
        /*----------------------------------------------------------------------------------------------------------------*/
        if (c == cmdSearch) {
              
        Midlet.INSTANCE.disp.setCurrent(new HotSearch());
        }
        /*-------------------------------------------------------------------------------------------------------------------**/
        
    }

    
    
    public void run() {
        Hotel[] hotels = new HotelDAO().find(resultatRecherche.str);
        if (hotels.length > 0) {
            for (int i = 0; i < hotels.length; i++) {
               System.out.println(str);
                
                append(hotels[i].getNom()+ " - " + hotels[i].getVille()+ " - " +hotels[i].getEtoiles()+ " \n " + hotels[i].getAdresse()+ "  \n " + hotels[i].getPrix_nuit()+"  - " + hotels[i].getDescription()+"\n------------------------------------------", null);
            }
        }
    }
    
}
