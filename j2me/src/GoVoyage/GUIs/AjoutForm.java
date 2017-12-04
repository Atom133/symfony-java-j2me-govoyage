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
import GoVoyage.Entities.Vol;

/**
 *
 * @author SASSOU
 */
public class AjoutForm extends Form implements CommandListener, Runnable {

    TextField tfdep = new TextField("dateDepart", "", 50, TextField.ANY);
    TextField tfarr = new TextField("dateArrivee", "", 50, TextField.ANY);
    TextField tfhd = new TextField("heureDepart", "", 50, TextField.ANY);
    TextField tfha = new TextField("heureArrivee", "", 50, TextField.ANY);
    TextField tfnbr = new TextField("nbrePassagers", "", 50, TextField.ANY);
    TextField tfc = new TextField("companie", "", 50, TextField.ANY);
    TextField tfp = new TextField("prixBillet", "", 50, TextField.ANY);
    TextField tfcb = new TextField("classeBillet", "", 50, TextField.ANY);
    TextField tfad = new TextField("aereportDepart", "", 50, TextField.ANY);
    TextField tfaa = new TextField("aeroportArrivee", "", 50, TextField.ANY);
    Command cmdEnregistrer = new Command("Enregistrer", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    public AjoutForm() {
        super("vol");
         append(tfdep);
        append(tfarr);
        append(tfhd);
        append(tfha);
        append(tfnbr);
        append(tfc);
        append(tfp);
        append(tfcb);
        append(tfad);
        append(tfaa);
        addCommand(cmdEnregistrer);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
          if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new VolList());
        }
        if (c == cmdEnregistrer) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
         String strdep = tfdep.getString();
        String strarr = tfarr.getString();
        String strhd = tfhd.getString();
        String strha = tfha.getString();
        String strnbr = tfnbr.getString();
        String strc = tfc.getString();
        String strp = tfp.getString();
        String strcb = tfcb.getString();
        String strad = tfad.getString();
        String straa = tfaa.getString();
        
        boolean result = new VolDAO().insert(new Vol(strdep,strarr,strhd,strha,strnbr,strc,strp,strcb,strad,straa));
        Alert alert = new Alert("Résultat");
        if (result=true) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("Vol ajouté avec succés");
            Midlet.INSTANCE.disp.setCurrent(alert,new VolList());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("Ajout du vol échoué");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }
}
      
      

  



  

  