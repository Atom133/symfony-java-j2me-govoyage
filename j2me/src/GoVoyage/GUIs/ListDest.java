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
public class ListDest extends List implements CommandListener, Runnable {

    Destination[] destinations = new DestinationDAO().select();
    Command cmdExit = new Command("Exit", Command.EXIT, 0);
    Command cmdModif = new Command("Update", Command.SCREEN, 0);
    Command cmdSupp = new Command("Delete", Command.SCREEN, 0);

    public ListDest() {
        super("Destinations list", List.IMPLICIT);
        addCommand(cmdSupp);
        addCommand(cmdModif);
        addCommand(cmdExit);
        setCommandListener(this);
        Thread th = new Thread(this);
        th.start();

    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdModif) {
            //System.out.println(this.getSelectedIndex());
            Midlet.INSTANCE.disp.setCurrent(new ModifDest(destinations[this.getSelectedIndex()]));
            System.out.println(this.getSelectedIndex());
            // Midlet.INSTANCE.disp.setCurrent(new ModifDest());
        }
        if (c == cmdSupp) {
            Midlet.INSTANCE.disp.setCurrent(new SuppriDest(destinations[this.getSelectedIndex()]));
            System.out.println(this.getSelectedIndex());
        }
        if (c == cmdExit) {
            Midlet.INSTANCE.disp.setCurrent(new DestinationMenu());
        }
    }

    public void run() {
       
        if (destinations.length > 0) {
            for (int i = 0; i < destinations.length; i++) {
                append(destinations[i].getPays() + " - " + destinations[i].getVille() + " - " + destinations[i].getDescription() + " - " + destinations[i].getEvalution(), null);
                //append(destinations[i].getPays() + " - " + destinations[i].getVille(), null);
            }

        }
    }

}
