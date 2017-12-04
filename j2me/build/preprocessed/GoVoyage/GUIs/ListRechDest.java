/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.DestinationDAO;
import GoVoyage.Entities.Destination;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.List;

/**
 *
 * @author atom
 */
public class ListRechDest extends List implements CommandListener, Runnable {

    Command cmdAjout = new Command("Ajouter une destination", Command.SCREEN, 0);
    Command cmdExit = new Command("Exit", Command.EXIT, 0);
    String pays;
    String ville;

    public ListRechDest(String pays, String ville) {

        super("Destination selectionnée", List.IMPLICIT);
        this.pays = pays;
        this.ville = ville;

        addCommand(cmdExit);
        setCommandListener(this);
        Thread th = new Thread(this);
        th.start();

    }

    public void commandAction(Command c, Displayable d) {

        if (c == cmdExit) {
            Midlet.INSTANCE.notifyDestroyed();
        }
    }

    public void run() {
        System.out.println("ville" + ville);
        System.out.println("pays" + pays);
        Destination[] destinations = new DestinationDAO().search(this.pays, this.ville);
        if (destinations.length > 0) {
            for (int i = 0; i < destinations.length; i++) {

                append(destinations[i].getId() + " - " + destinations[i].getPays() + " - " + destinations[i].getVille() + " - " + destinations[i].getDescription() + " - " + destinations[i].getEvalution(), null);
                //append(destinations[i].getPays() + " - " + destinations[i].getVille(), null);
            }
        }
    }

}
