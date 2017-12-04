/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.HotelDAO;
import javax.microedition.lcdui.*;

/**
 *
 * @author lenovo
 */
public class HotMod extends Form implements CommandListener, Runnable{
    TextField sch_title = new TextField("Search by name", "", 50, TextField.ANY);
      public static String old_nom ;
    
    TextField tf_title = new TextField("New Name", "", 50, TextField.ANY);
    TextField tf_dest = new TextField("New Price", "", 50, TextField.ANY);
    String[] etoiles = {"1","2","3","4","5"};
    ChoiceGroup cg = new ChoiceGroup("New Rating" , ChoiceGroup.POPUP, etoiles, Midlet.INSTANCE.img);
    TextField tf_desc = new TextField("New Description", "", 50, TextField.ANY);

    Command cmdMod = new Command("Confirm", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    public HotMod(String old_name) {
        super("Hotel");
        old_nom =old_name;
        append(old_nom);
        append("\n------------------------------------------");
        append(tf_title);
        append(tf_dest);
        append(cg);
        append(tf_desc);
        
        addCommand(cmdMod);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new HotList());
        }
        if (c == cmdMod) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        
        String old_nom = HotMod.old_nom  ;
        String nom = tf_title.getString();
        Double prix_nuit = Double.valueOf( tf_dest.getString());
        int etoiles = cg.getSelectedIndex();
        String desc = tf_desc.getString();
        
        boolean result = new HotelDAO().modify(old_nom,nom,etoiles,prix_nuit,desc);
        Alert alert = new Alert("Result");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("hotel Successfully Modified!");
            Midlet.INSTANCE.disp.setCurrent(alert,new HotList());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("ERROR!");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }
    
    

}
