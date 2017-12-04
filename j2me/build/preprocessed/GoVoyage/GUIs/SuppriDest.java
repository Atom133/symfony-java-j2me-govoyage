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
public class SuppriDest extends Form implements CommandListener, Runnable {

    TextField tfid = new TextField("id", "", 50, TextField.UNEDITABLE);
    TextField tfpays = new TextField("pays", "", 50, TextField.UNEDITABLE);
    TextField tfville = new TextField("ville", "", 50, TextField.UNEDITABLE);
    TextField tfdescription = new TextField("description", "", 5000, TextField.UNEDITABLE);
    TextField tfevaluation = new TextField("evaluation", "", 50, TextField.UNEDITABLE);

    Command cmdSupp = new Command("Supprimer", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);
    Destination des = null;

    public SuppriDest(Destination dest) {

        super("Destination");
        this.des = dest;
        chargerFormDes(dest);
        append(tfid);
        append(tfpays);
        append(tfville);
        append(tfdescription);
        append(tfevaluation);

        addCommand(cmdSupp);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public SuppriDest() {
        super("Destination");
        append(tfid);
        append(tfpays);
        append(tfville);
        append(tfdescription);
        append(tfevaluation);

        addCommand(cmdSupp);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new ListDest());
        }
        if (c == cmdSupp) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        boolean result = new DestinationDAO().delete(this.des.getId());
        Alert alert = new Alert("Résultat");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Destination supprimée avec succés");
            Midlet.INSTANCE.disp.setCurrent(alert, new ListDest());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("Suppression du destination échouée");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }

    private void chargerFormDes(Destination dest) {

        tfid.setString(Integer.toString(dest.getId()));
        tfpays.setString(dest.getPays());
        tfville.setString(dest.getVille());
        tfdescription.setString(dest.getDescription());
        tfevaluation.setString(Float.toString(dest.getEvalution()));

    }

}
