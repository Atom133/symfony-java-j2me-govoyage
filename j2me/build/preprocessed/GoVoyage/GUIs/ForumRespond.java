/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.ResponseDAO;
import GoVoyage.Entities.Response;
import javax.microedition.lcdui.*;

/**
 *
 * @author sawsse
 */
public class ForumRespond extends List implements CommandListener, Runnable{
    Response[] resp = new ResponseDAO().select();
    String res;
    
    
    Command cmdAjout = new Command("Add", Command.SCREEN, 0);
    Command cmdExit = new Command("Back", Command.EXIT, 0);
    Command cmddel = new Command("Delete", Command.SCREEN, 0);



    public ForumRespond() {
        super("Responses List", List.IMPLICIT);
        addCommand(cmdAjout);
        addCommand(cmdExit);
        addCommand(cmddel);
        setCommandListener(this);
        Thread th = new Thread(this);
        th.start();
        
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdAjout) {
            Midlet.INSTANCE.disp.setCurrent(new ResponseAdd());
        }
        if (c == cmdExit) {
           Midlet.INSTANCE.disp.setCurrent(new ForumList());
        }
        if (c == cmddel) {
            
            res = resp[this.getSelectedIndex()].getResponse();

            boolean result = new ResponseDAO().delete(res);
            Alert alert = new Alert("Résultat");
            if (result) {
                alert.setType(AlertType.CONFIRMATION);
                alert.setString("Formation supprimé avec succés");
                Midlet.INSTANCE.disp.setCurrent(alert, new ForumRespond());
            } else {
                alert.setType(AlertType.ERROR);
                alert.setString("Suppression échoué");
                Midlet.INSTANCE.disp.setCurrent(alert);

            }
            Midlet.INSTANCE.disp.setCurrent(new ForumRespond());
            
           // Midlet.INSTANCE.disp.setCurrent(new ForumDelete());
        }
    }

    public void run() {
        Response[] responses = new ResponseDAO().select();
        if (responses.length > 0) {
            for (int i = 0; i < responses.length; i++) {
                append("Response : "+responses[i].getResponse() +"\n------------------------------------------ ", null);
            }
        }
    }
    
}
