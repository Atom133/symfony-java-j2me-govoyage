/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.List;
import javax.microedition.lcdui.TextField;


import GoVoyage.Midlet;
import GoVoyage.DAOs.HotelDAO;
import GoVoyage.Entities.Hotel;
import javax.microedition.lcdui.*;
import javax.microedition.m3g.Texture2D;

/**
 *
 * @author mohamed
 */
public class HotSearchAdmin extends Form implements CommandListener, Runnable {
    TextField sch_title = new TextField("Search by name", "", 50, TextField.ANY);
    Command cmdconf = new Command("Confirm", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);
    
    public HotSearchAdmin() {
        super("Hotel");
       
        append(sch_title);
        addCommand(cmdconf);
        addCommand(cmdBack);
       
         setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
     if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new HotList());
        }
        if (c == cmdconf) {
            String cible= sch_title.getString();
            System.out.println(cible);
           Midlet.INSTANCE.disp.setCurrent(new resultatRchAdmin(cible));
        }
    }

    public void run() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    }
