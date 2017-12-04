/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import javax.microedition.lcdui.Alert;
import javax.microedition.lcdui.AlertType;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.Form;
import javax.microedition.lcdui.TextField;
import GoVoyage.Midlet;
import GoVoyage.DAOs.VolDAO;

/**
 *
 * @author SASSOU
 */
public class VolDelete extends Form implements CommandListener, Runnable{
      TextField sch = new TextField("Search for delete", "", 50, TextField.ANY);
  

    Command cmdDel = new Command("Confirm", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);
         public VolDelete() {
        super("Vol");
        
        append(sch);
        //append(sch_dest);
        addCommand(cmdDel);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
           if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new VolList());
        }
        if (c == cmdDel) {
            Thread th = new Thread(this);
            th.start();
        }
    }

    public void run() {
          String dateDepart = sch.getString();
        //String dest = sch_dest.getString();
        
        boolean result = new VolDAO().delete(dateDepart);
        Alert alert = new Alert("Result");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Experience Successfully Deleted!");
            Midlet.INSTANCE.disp.setCurrent(alert,new VolList());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("ERROR!");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }
    
}
