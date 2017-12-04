/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.Splashes.*;
import javax.microedition.lcdui.*;

/**
 *
 * @author lenovo
 */
public class AdminMenu extends Form implements CommandListener, Runnable {

    String[] menu = {"Experiences", "Hotels", "Flights", "Users","Destination"};
    ChoiceGroup cg = new ChoiceGroup("Choose lobby :\n", ChoiceGroup.EXCLUSIVE, menu, Midlet.INSTANCE.img_a);

    Command cmdEnt = new Command("Enter", Command.SCREEN, 0);
    Command cmdBack = new Command("Logout", Command.EXIT, 0);

    public AdminMenu() {
        super("ADMIN MENU");
        
        append(cg);
        cg.setPreferredSize(250, 270);
        cg.setLayout(cg.LAYOUT_CENTER);
        addCommand(cmdEnt);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new login());
        }
        if (c == cmdEnt) {
            if (cg.isSelected(0)) {
                Midlet.INSTANCE.disp.setCurrent(new SplashScreen_ExpA(Midlet.INSTANCE));
            } else if (cg.isSelected(1)) {
                Midlet.INSTANCE.disp.setCurrent(new SplashScreen_HotelA(Midlet.INSTANCE));
            } else if (cg.isSelected(2)) {
                Midlet.INSTANCE.disp.setCurrent(new SplashScreen_Flight(Midlet.INSTANCE));
            } else if (cg.isSelected(3)) {
                Midlet.INSTANCE.disp.setCurrent(new SplashScreen_User(Midlet.INSTANCE));
            } else if (cg.isSelected(4)) {
                Midlet.INSTANCE.disp.setCurrent(new SplashScreen_Dest(Midlet.INSTANCE));
            }
        }

    }

    public void run() {

    }

}
