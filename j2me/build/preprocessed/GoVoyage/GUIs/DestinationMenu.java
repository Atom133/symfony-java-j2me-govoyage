/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.Splashes.SplashScreen_ExpA;
import GoVoyage.Splashes.SplashScreen_Flight;
import GoVoyage.Splashes.SplashScreen_HotelA;
import GoVoyage.Splashes.SplashScreen_User;
import javax.microedition.lcdui.ChoiceGroup;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.Form;

/**
 *
 * @author lenovo
 */
public class DestinationMenu extends Form implements CommandListener, Runnable {

    String[] menu = {"Ajouter destination", "Liste des destinations", "Rechercher destination"};
    ChoiceGroup cg = new ChoiceGroup("Choose option :\n", ChoiceGroup.EXCLUSIVE, menu, null);

    Command cmdEnt = new Command("OK", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    public DestinationMenu() {
        super("DESTINATION MENU");
        
        append(cg);
        addCommand(cmdEnt);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new AdminMenu());
        }
        if (c == cmdEnt) {
            if (cg.isSelected(0)) {
                Midlet.INSTANCE.disp.setCurrent(new AjoutDest());
            } else if (cg.isSelected(1)) {
                Midlet.INSTANCE.disp.setCurrent(new ListDest());
            } else if (cg.isSelected(2)) {
                Midlet.INSTANCE.disp.setCurrent(new RechercheDest());
            }
        }

    }

    public void run() {

    }

}
