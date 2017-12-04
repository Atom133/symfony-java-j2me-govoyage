/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.ExperienceDAO;
import GoVoyage.Entities.Experience;
import javax.microedition.lcdui.Alert;
import javax.microedition.lcdui.AlertType;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.List;

/**
 *
 * @author lenovo
 */
public class AdminExp extends List implements CommandListener,Runnable{
    
   Experience[] AdminExp = new ExperienceDAO().AdminSelect();
    String title;
    public static String old_title;
            
    Command cmdDel = new Command("Delete", Command.SCREEN, 0);
    Command cmdExit = new Command("Exit", Command.EXIT, 0);

    public AdminExp() {
        super("All Experiences List", List.IMPLICIT);
        addCommand(cmdDel);
        addCommand(cmdExit);
        setCommandListener(this);
        Thread th = new Thread(this);
        th.start();
        
    }

    public void commandAction(Command c, Displayable d) {
        
        if (c == cmdExit) {
        
        Midlet.INSTANCE.disp.setCurrent(new AdminMenu());
        }
        
        if (c == cmdDel) {
            title = AdminExp[this.getSelectedIndex()].getTitle();

            boolean result = new ExperienceDAO().AdminDelete(title);
            Alert alert = new Alert("Résultat");
            if (result) {
                alert.setType(AlertType.CONFIRMATION);
                alert.setString("Formation supprimé avec succés");
                Midlet.INSTANCE.disp.setCurrent(alert, new AdminExp());
            } else {
                alert.setType(AlertType.ERROR);
                alert.setString("Suppression échoué");
                Midlet.INSTANCE.disp.setCurrent(alert);

            }
            Midlet.INSTANCE.disp.setCurrent(new AdminExp());
            
        }
    }

    public void run() {
        Experience[] Aexperiences = new ExperienceDAO().AdminSelect();
        if (Aexperiences.length > 0) {
            for (int i = 0; i < Aexperiences.length; i++) {
                append("Title: "+Aexperiences[i].getTitle() +"\nDate: "+ Aexperiences[i].getDate()+ " \nReports: " + Aexperiences[i].getReports()+"\n------------------------------------------", null);
            }
        }
        
    }
    
}
