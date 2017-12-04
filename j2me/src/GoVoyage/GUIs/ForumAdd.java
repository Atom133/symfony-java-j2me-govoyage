/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.ForumDAO;
import GoVoyage.Entities.Forum;
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
public class ForumAdd extends Form implements CommandListener, Runnable {

    TextField tfTtl = new TextField("Title", "", 50, TextField.ANY);
    TextField tfCnt = new TextField("Post", "", 50, TextField.ANY);

    Command cmdEnregistrer = new Command("Add", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    public ForumAdd() {
        super("Forum");

        append(tfTtl);
        append(tfCnt);
        addCommand(cmdEnregistrer);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new ForumList());
        }
        if (c == cmdEnregistrer) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        String ttl = tfTtl.getString();
        String cnt = tfCnt.getString();
        boolean result = new ForumDAO().insert(new Forum(ttl, cnt));
        Alert alert = new Alert("Résultat");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Forum ajouté avec succés");
            Midlet.INSTANCE.disp.setCurrent(alert,new ForumList());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("Ajout du forum échoué");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }

}
