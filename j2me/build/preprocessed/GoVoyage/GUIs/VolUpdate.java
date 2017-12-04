/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import javax.microedition.lcdui.Alert;
import javax.microedition.lcdui.AlertType;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.Form;
import javax.microedition.lcdui.TextField;
import GoVoyage.Midlet;
import GoVoyage.DAOs.VolDAO;

/**
 *
 * @author SASSOU
 */
public class VolUpdate extends Form implements CommandListener, Runnable{
    TextField sch1 = new TextField("old date", "", 50, TextField.ANY);
    TextField sch = new TextField("new date départ", "", 50, TextField.ANY);
    TextField tf_dd = new TextField("New date départ", "", 50, TextField.ANY);
    TextField tf_da = new TextField("New date arrivée", "", 50, TextField.ANY);
    TextField tf_hd = new TextField("New heure départ", "", 50, TextField.ANY);
    TextField tf_ha = new TextField("New heure arrivée", "", 50, TextField.ANY);
    TextField tf_nbr = new TextField("New nbrePassagers", "", 50, TextField.ANY);
    TextField tf_c = new TextField("New companie", "", 50, TextField.ANY);
    TextField tf_pb = new TextField("New prixBillet", "", 50, TextField.ANY);
    TextField tf_cb = new TextField("New classeBillet", "", 50, TextField.ANY);
    TextField ad = new TextField("New aereportDepart", "", 50, TextField.ANY);
    TextField aa = new TextField("New aeroportArrivee", "", 50, TextField.ANY);
    Command cmdMod = new Command("Confirm", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);
    public VolUpdate() {
        super("Vol");
        append(sch1);
        append("\n------------------------------------------");

        append(sch);
       
        append(tf_dd);
        append(tf_da);
        append(tf_hd);
        append(tf_ha);
        append(tf_nbr);
        append(tf_c);
        append(tf_pb);
        append(tf_cb);
        append(ad);
        append(aa);
        
        
        addCommand(cmdMod);
        addCommand(cmdBack);
        setCommandListener(this);
    }


    public void commandAction(Command c, Displayable d) {
          if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new VolList());
        }
        if (c == cmdMod) {
            Thread th = new Thread(this);
            th.start();
        }
    }

    public void run() {
         String old_dateDepart = sch1.getString();
         
         String dateDepart = sch.getString();
        String dateArrivee = tf_da.getString();
        String heureDepart = tf_hd.getString();
        String heureArrivee = tf_ha.getString();
        String nbrePassagers = tf_nbr.getString();
        String companie = tf_c.getString();
        String prixBillet = tf_pb.getString();
        String classeBillet = tf_cb.getString();
        String aereportDepart = ad.getString();
        String aeroportArrivee = aa.getString();
        
    
        
        boolean result = new VolDAO().modify(old_dateDepart,dateDepart,dateArrivee,heureDepart,heureArrivee,nbrePassagers,companie,prixBillet,classeBillet,aereportDepart,aeroportArrivee);
        Alert alert = new Alert("Result");
        if (result=true) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Experience Successfully Modified!");
            Midlet.INSTANCE.disp.setCurrent(alert,new VolList());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("ERROR!");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }
    
}
