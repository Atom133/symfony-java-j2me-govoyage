/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.PersonneDAO;
import GoVoyage.Entities.Personne;
import java.io.DataInput;
import java.io.DataInputStream;
import java.io.IOException;
import javax.microedition.io.Connector;
import javax.microedition.io.HttpConnection;
import javax.microedition.lcdui.Alert;
import javax.microedition.lcdui.AlertType;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Display;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.Form;
import javax.microedition.lcdui.List;
import javax.microedition.lcdui.TextField;

/**
 *
 * @author Saafi_Amine
 */
public class personneAjoutForm extends Form implements CommandListener, Runnable {

    TextField tfnom = new TextField("nom", "", 50, TextField.ANY);
    TextField tfprenom = new TextField("prenom", "", 50, TextField.ANY);
    TextField username = new TextField("username", "", 50, TextField.ANY);
    TextField password = new TextField("password", "", 50, TextField.ANY);
    TextField email = new TextField("email", "", 50, TextField.ANY);

    Command cmdEnregistrer = new Command("Enregistrer", Command.SCREEN, 0);
    Command cmdBack = new Command("Retour", Command.EXIT, 0);

    public personneAjoutForm() {
        super("Inscription");

        append(tfnom);
        append(tfprenom);
        append(username);
        append(password);
        append(email);
        addCommand(cmdEnregistrer);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Display disp = null;
            Midlet.INSTANCE.disp.setCurrent(new PersonneList());
        }
        if (c == cmdEnregistrer) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        String st_nom = tfnom.getString();
        String st_prenom = tfprenom.getString();
        String st_username = username.getString();
        String st_password = password.getString();
        String st_email = email.getString();
        boolean result = new PersonneDAO().insert(new Personne(st_nom, st_prenom, st_username, st_password, st_email));
        Alert alert = new Alert("Résultat");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Compte ajouté avec succés");
            Display disp = null;
            Midlet.INSTANCE.disp.setCurrent(alert,new PersonneList());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("Ajout du compte échoué");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }

}
