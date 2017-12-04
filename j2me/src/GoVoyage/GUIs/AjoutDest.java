/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;
import GoVoyage.Midlet;
import GoVoyage.DAOs.DestinationDAO;
import GoVoyage.Entities.Destination;
import javax.microedition.lcdui.Alert;
import javax.microedition.lcdui.AlertType;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.Form;
import javax.microedition.lcdui.TextField;

/**
 *
 * @author atom
 */
public class AjoutDest extends Form implements CommandListener, Runnable {

    TextField pays = new TextField("pays", "", 50, TextField.ANY);
    TextField ville = new TextField("ville", "", 50, TextField.ANY);
    TextField description = new TextField("description", "", 50, TextField.ANY);
    TextField evaluation = new TextField("evaluation", "", 50, TextField.NUMERIC);

    Command cmdEnregistrer = new Command("Enregistrer", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    public AjoutDest() {
        super("Destination");

        append(pays);
        append(ville);
        append(description);
        append(evaluation);
        
        addCommand(cmdEnregistrer);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new DestinationMenu());
        }
        if (c == cmdEnregistrer) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        String string1 = pays.getString();
        String string2 = ville.getString();
        String string3 = description.getString();
        float float1 = Float.parseFloat(evaluation.getString());
        boolean result = new DestinationDAO().insert(new Destination(string1, string2, string3 , float1));
        Alert alert = new Alert("Résultat");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Destination ajoutée avec succés");
            Midlet.INSTANCE.disp.setCurrent(alert,new ListDest());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("Ajout du destination échoué");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }

}
