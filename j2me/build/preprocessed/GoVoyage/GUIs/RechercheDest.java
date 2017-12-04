/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.Form;
import javax.microedition.lcdui.TextField;

/**
 *
 * @author atom
 */
public class RechercheDest extends Form implements CommandListener, Runnable {

    TextField pays = new TextField("pays", "", 50, TextField.ANY);
    TextField ville = new TextField("ville", "", 50, TextField.ANY);

    Command cmdRechercher = new Command("Rechercher", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    public RechercheDest() {
        super("Rechercher Destination");

        append(pays);
        append(ville);

        addCommand(cmdRechercher);
        addCommand(cmdBack);
        setCommandListener(this);

    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdRechercher) {
            String p = pays.getString();
            String v = ville.getString();
            Midlet.INSTANCE.disp.setCurrent(new ListRechDest(p, v));
        }
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new DestinationMenu());
        }
    }

    public void run() {

    }

}
