/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.List;
import GoVoyage.Midlet;
import GoVoyage.DAOs.VolDAO;
import GoVoyage.Entities.Vol;

/**
 *
 * @author SASSOU
 */
public class VolList extends List implements CommandListener,Runnable{
     Command cmdAjout = new Command("Add flight", Command.SCREEN, 0);
    Command cmdExit = new Command("Exit", Command.EXIT, 0);
       Command cmdDel = new Command("Delete", Command.SCREEN, 0);
   
     Command cmdMod = new Command("Update", Command.SCREEN, 0);
   

    public VolList() {
        
        super("Liste Vol", List.IMPLICIT);
        addCommand(cmdAjout);
        addCommand(cmdDel);
      
       addCommand(cmdMod);
        
        addCommand(cmdExit);
        setCommandListener(this);
        Thread th = new Thread(this);
        th.start();
    }

    public void commandAction(Command c, Displayable d) {
       if (c == cmdAjout) {
            Midlet.INSTANCE.disp.setCurrent(new AjoutForm());
        }
        if (c == cmdExit) {
            Midlet.INSTANCE.disp.setCurrent(new AdminMenu());
        }
             if (c == cmdDel) {
            
            
            Midlet.INSTANCE.disp.setCurrent(new VolDelete());
        }
        if (c == cmdMod) {
            Midlet.INSTANCE.disp.setCurrent(new VolUpdate());
        }
    }

    public void run() {
          Vol[] vol = new VolDAO().select();
        if (vol.length > 0) {
            for (int i = 0; i < vol.length; i++) {
                append(vol[i].getDateDepart() + " - " + vol[i].getDateArrivee() + " - " + vol[i].getHeureDepart() + " - " + vol[i].getHeureArrivee() + " - " + vol[i].getNbrePassagers() + " - " + vol[i].getCompanie()+ " - " + vol[i].getPrixBillet() + " - " + vol[i].getClasseBillet() + " - "+ vol[i].getAereportDepart() + " - " + vol[i].getAeroportArrivee(), null);
            
            }
        }
    }
    
}
