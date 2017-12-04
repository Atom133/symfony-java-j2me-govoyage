/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.ForumDAO;
import javax.microedition.lcdui.Alert;
import javax.microedition.lcdui.AlertType;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.Form;
import javax.microedition.lcdui.TextField;

/**
 *
 * @author sawsse
 */
public class ForumDelete extends Form implements CommandListener, Runnable{

    TextField sch_title = new TextField("Search by Title", "", 50, TextField.ANY);
    //TextField sch_dest = new TextField("Search Destination", "", 50, TextField.ANY); 

    Command cmdDel = new Command("Confirm", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    public ForumDelete() {
        super("Forum");
        
        append(sch_title);
        //append(sch_dest);
        addCommand(cmdDel);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new ForumList());
        }
        if (c == cmdDel) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        String title = sch_title.getString();
        //String dest = sch_dest.getString();
        
        boolean result = new ForumDAO().delete(title);
        Alert alert = new Alert("Result");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Forum Successfully Deleted!");
            Midlet.INSTANCE.disp.setCurrent(alert,new ForumList());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("You can't deleted it!");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }
    
    
}
