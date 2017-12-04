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
public class ModifDest extends Form implements CommandListener, Runnable {

    TextField tfid = new TextField("id", "", 50, TextField.UNEDITABLE);
    TextField tfpays = new TextField("pays", "", 50, TextField.ANY);
    TextField tfville = new TextField("ville", "", 50, TextField.ANY);
    TextField tfdescription = new TextField("description", "", 5000, TextField.ANY);
    TextField tfevaluation = new TextField("evaluation", "", 50, TextField.ANY);

    Command cmdEnregistrer = new Command("Update", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    private void chargerFormDes(Destination dest) {
        //int integer1 = Integer.parseInt();
        tfid.setString(Integer.toString(dest.getId()));
        tfpays.setString(dest.getPays());
        tfville.setString(dest.getVille());
        tfdescription.setString(dest.getDescription());
        tfevaluation.setString(Float.toString(dest.getEvalution()));

        // String string1 = tfpays.getString();
        //String string2 = tfville.getString();
        //String string3 = tfdescription.getString();
        //float float1 = Float.parseFloat(tfevaluation.getString());
    }

    public ModifDest(Destination dest) {
        super("Destination");
        //
        chargerFormDes(dest);
        System.out.println("###########");
        // System.out.println();
        System.out.println("###########");
        append(tfid);
        append(tfpays);
        append(tfville);
        append(tfdescription);
        append(tfevaluation);

        addCommand(cmdEnregistrer);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public ModifDest() {
        super("Destination");
        append(tfid);
        append(tfpays);
        append(tfville);
        append(tfdescription);
        append(tfevaluation);

        addCommand(cmdEnregistrer);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new ListDest());
        }
        if (c == cmdEnregistrer) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        int idUp = Integer.parseInt(tfid.getString());
        String payUp = tfpays.getString();
        String villeUp = tfville.getString();
        String descUp = tfdescription.getString();
        float evalUp = Float.parseFloat(tfevaluation.getString());
        boolean result = new DestinationDAO().update(new Destination(idUp, payUp, descUp, villeUp, evalUp));
        Alert alert = new Alert("Résultat");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Destination modifiée avec succés");
            Midlet.INSTANCE.disp.setCurrent(alert, new ListDest());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("Modification du destination échouée");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }

}
