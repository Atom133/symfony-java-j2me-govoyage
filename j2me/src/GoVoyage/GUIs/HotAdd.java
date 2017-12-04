/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.HotelDAO;
import GoVoyage.Entities.Hotel;
import java.io.IOException;
import java.util.TimeZone;
import javax.microedition.lcdui.*;

/**
 *
 * @author lenovo
 */
public class HotAdd extends Form implements CommandListener, Runnable {
    
 TextField tfnom = new TextField("nom", "", 50, TextField.ANY);
    TextField tfville = new TextField("ville", "", 50, TextField.ANY);
    TextField tfadresse = new TextField("adresse", "", 50, TextField.ANY);
    TextField tfnbEt = new TextField("nombre d'etoiles", "", 50, TextField.NUMERIC);
    TextField tfprix = new TextField("prix nuit", "", 50, TextField.NUMERIC);
    TextField description = new TextField("description", "", 50, TextField.ANY);

    Command cmdEnregistrer = new Command("Enregistrer", Command.SCREEN, 0);
    Command cmdBack = new Command("Back", Command.EXIT, 0);

    public HotAdd() {
        super("Hotel");

        append(tfnom);
        append(tfville);
        append(tfadresse);
        append(tfnbEt);
        append(tfprix);
        append(description);
        addCommand(cmdEnregistrer);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.disp.setCurrent(new HotList());
        }
        if (c == cmdEnregistrer) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        String strnom = tfnom.getString();
        String strville = tfville.getString();
        int strnbEt = Integer.parseInt(tfnbEt.getString());
        Double prix= Double.valueOf((tfprix.getString()));
        String strdesc = description.getString();
        String stradresse = tfadresse.getString();
        boolean result = new HotelDAO().insert(new Hotel(strnom, strville, strnbEt, stradresse, prix, strdesc));
        Alert alert = new Alert("Résultat");
        if (result) {
            alert.setType(AlertType.CONFIRMATION);
            alert.setString("hotel ajouté avec succés");
            Midlet.INSTANCE.disp.setCurrent(alert,new HotList());
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("Ajout du hotel échoué");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }
    }
    