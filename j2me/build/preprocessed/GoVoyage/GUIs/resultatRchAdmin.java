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
public class resultatRchAdmin extends List implements CommandListener,Runnable{
    public static String strAD;
    Command cmdAdd = new Command("Add", Command.SCREEN, 0);
    Command cmdDel = new Command("Delete", Command.SCREEN, 0);
    Command cmdMod = new Command("Modify", Command.SCREEN, 0);
    Command cmdExit = new Command("Exit", Command.EXIT, 0);
    Command cmdrec = new Command("Contact Us", Command.SCREEN, 0);
    Command cmdSearch = new Command("search", Command.SCREEN, 0);
    
    public resultatRchAdmin(String cible) {
       
        super("Hotel's List", List.IMPLICIT);
        addCommand(cmdAdd);
        addCommand(cmdSearch);
        strAD=cible;
        addCommand(cmdExit);
        addCommand(cmdrec);
        
        addCommand(cmdDel);
        addCommand(cmdMod);
        addCommand(cmdExit);
        
        
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
            Midlet.INSTANCE.notifyDestroyed();
        }
        /*----------------------------------------------------------------------------------------------------------------*/
        if (c == cmdDel) {
               strAD=getString(getSelectedIndex());
            String nomHot =strAD.substring(0,strAD.indexOf(" "));
            System.out.println(nomHot );
           
            
        boolean result = new HotelDAO().delete(nomHot);
        Alert alert = new Alert("Result");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Hotel Successfully Deleted!");
            Midlet.INSTANCE.disp.setCurrent(alert,new HotList());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("ERROR!");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
        Midlet.INSTANCE.disp.setCurrent(new HotList());
        }
        /*-------------------------------------------------------------------------------------------------------------------**/
        if (c == cmdMod) {
             strAD=getString(getSelectedIndex());
            String nomHot =strAD.substring(0,strAD.indexOf(" "));
            System.out.println(nomHot );
           
            Midlet.INSTANCE.disp.setCurrent(new HotMod(nomHot));
        }
        /*-----------------------------------------------------------------------------------------------------------------------------------*/
        if (c == cmdSearch) {
             
           
            Midlet.INSTANCE.disp.setCurrent(new HotSearch());
        }
    }

    
    
    
    
    public void run() {
        Hotel[] hotels = new HotelDAO().find(resultatRchAdmin.strAD);
        if (hotels.length > 0) {
            for (int i = 0; i < hotels.length; i++) {
               System.out.println(strAD);
                
                append(hotels[i].getNom()+ " - " + hotels[i].getVille()+ " - " +hotels[i].getEtoiles()+ " \n " + hotels[i].getAdresse()+ "  \n " + hotels[i].getPrix_nuit()+"  - " + hotels[i].getDescription()+"\n------------------------------------------", null);
            }
        }
    }
    
}
