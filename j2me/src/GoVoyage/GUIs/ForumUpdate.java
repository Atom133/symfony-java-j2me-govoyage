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
import javax.microedition.lcdui.ChoiceGroup;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.Form;
import javax.microedition.lcdui.TextField;

/**
 *
 * @author sawsse
 */
public class ForumUpdate extends Form implements CommandListener, Runnable{
    TextField sch_title = new TextField("Search by Title", "", 50, TextField.ANY);
    
    
    TextField tf_title = new TextField("New Title", "", 50, TextField.ANY);
    TextField tf_cont = new TextField("New Post", "", 50, TextField.ANY);
 

    Command cmdMod = new Command("Confirm", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    public ForumUpdate() {
        super("Forum");

        append(sch_title);
        append("\n------------------------------------------");
        append(tf_title);
        append(tf_cont);
        
        addCommand(cmdMod);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new ForumList());
        }
        if (c == cmdMod) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        String old_title = sch_title.getString();
        String title = tf_title.getString();
        String cont = tf_cont.getString();
       
        
        boolean result = new ForumDAO().modify(old_title,title,cont);
        Alert alert = new Alert("Result");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Forum Successfully Modified!");
            Midlet.INSTANCE.disp.setCurrent(alert,new ForumList());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("You can't updated it!");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }
    
    

}