/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.*;
import GoVoyage.Entities.*;
import javax.microedition.lcdui.*;

/**
 *
 * @author lenovo
 */
public class ResponseAdd extends Form implements CommandListener, Runnable {

    TextField tfRsp = new TextField("Response", "", 200, TextField.ANY);

    Command cmdEnregistrer = new Command("Ok", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    public ResponseAdd() {
        super("response");

        append(tfRsp);
        addCommand(cmdEnregistrer);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new ForumRespond());
        }
        if (c == cmdEnregistrer) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        String rsp = tfRsp.getString();
        boolean result = new ResponseDAO().insert(new Response(rsp));
        Alert alert = new Alert("Résultat");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Response ajouté avec succés");
            Midlet.INSTANCE.disp.setCurrent(alert,new ForumRespond());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("Ajout du forum échoué");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }

}
