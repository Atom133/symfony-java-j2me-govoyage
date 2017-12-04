/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.ExperienceDAO;
import GoVoyage.Entities.Experience;
import javax.microedition.lcdui.*;
import GoVoyage.GUIs.*;

/**
 *
 * @author lenovo
 */
public class ExpList extends List implements CommandListener,Runnable{
    
   Experience[] exp = new ExperienceDAO().select();
    String title;
    public static String old_title;
            
    Command cmdAdd = new Command("Add", Command.SCREEN, 0);
    Command cmdDel = new Command("Delete", Command.SCREEN, 0);
    Command cmdMod = new Command("Modify", Command.SCREEN, 0);
    Command cmdExit = new Command("Exit", Command.EXIT, 0);
    //Command cmdAd = new Command("Admin", Command.SCREEN, 0);
    Command cmdrec = new Command("Send SMS", Command.SCREEN, 0);

    public ExpList() {
        super("Experiences List", List.IMPLICIT);
        addCommand(cmdAdd);
        addCommand(cmdDel);
        addCommand(cmdMod);
        //addCommand(cmdAd);
        addCommand(cmdrec);
        addCommand(cmdExit);
        setCommandListener(this);
        Thread th = new Thread(this);
        th.start();
        
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdAdd) {
            Midlet.INSTANCE.disp.setCurrent(new ExpAdd());
        }
        if (c == cmdExit) {
            Midlet.INSTANCE.disp.setCurrent(new MemberMenu());
        }
        if (c == cmdDel) {
            title = exp[this.getSelectedIndex()].getTitle();

            boolean result = new ExperienceDAO().delete(title);
            Alert alert = new Alert("Résultat");
            if (result) {
                alert.setType(AlertType.CONFIRMATION);
                alert.setString("Formation supprimé avec succés");
                Midlet.INSTANCE.disp.setCurrent(alert, new ExpList());
            } else {
                alert.setType(AlertType.ERROR);
                alert.setString("Suppression échoué");
                Midlet.INSTANCE.disp.setCurrent(alert);

            }
            Midlet.INSTANCE.disp.setCurrent(new ExpList());
            
        }
        if (c == cmdMod) {
            old_title = exp[this.getSelectedIndex()].getTitle();
            Midlet.INSTANCE.disp.setCurrent(new ExpMod());
        }
        if (c ==  cmdrec) {
            Midlet.INSTANCE.disp.setCurrent(new Sms() );
        }
//        if (c ==  cmdAd) {
//            Midlet.INSTANCE.disp.setCurrent(new AdminExp() );
//        }
    }

    public void run() {
        Experience[] experiences = new ExperienceDAO().select();
        if (experiences.length > 0) {
            for (int i = 0; i < experiences.length; i++) {
                append("Title: "+experiences[i].getTitle() + " \nNote: " + experiences[i].getNote()+ " \nDescription: " +experiences[i].getDescription()+ " \n\n" + experiences[i].getDestination()+ " on: " + experiences[i].getDate()+"\n------------------------------------------", null);
            }
        }
        
    }
    
}
