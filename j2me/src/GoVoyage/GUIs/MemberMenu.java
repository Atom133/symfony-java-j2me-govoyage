/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.DAOs.*;
import GoVoyage.Entities.*;
import GoVoyage.Midlet;
import GoVoyage.Splashes.*;
import java.io.IOException;
import javax.microedition.lcdui.*;

/**
 *
 * @author lenovo
 */
public class MemberMenu extends Form implements CommandListener, Runnable {

    String[] menu = {"Experiences", "Forums", "Hotels", "Destination"};
    
    
    ChoiceGroup cg = new ChoiceGroup("Choose lobby :\n", ChoiceGroup.EXCLUSIVE, menu, Midlet.INSTANCE.img_m);

    Command cmdEnt = new Command("Enter", Command.SCREEN, 0);
    Command cmdBack = new Command("Logout", Command.EXIT, 0);

    public MemberMenu() {
        super("MEMBRES MENU");
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
                Midlet.INSTANCE.disp.setCurrent(new SplashScreen1(Midlet.INSTANCE));
            } else if (cg.isSelected(1)) {
                Midlet.INSTANCE.disp.setCurrent(new SplashScreen_Forum(Midlet.INSTANCE));
            } else if (cg.isSelected(2)) {
                Midlet.INSTANCE.disp.setCurrent(new SplashScreen_HotelM(Midlet.INSTANCE));
            } else if (cg.isSelected(3)) {
                Midlet.INSTANCE.disp.setCurrent(new GoogleMapsMarkerCanvas(Midlet.INSTANCE, d));
            }
        }

    }

    public void run() {
        
    }

}
