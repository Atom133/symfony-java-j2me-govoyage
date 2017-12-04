/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.PersonneDAO;
import GoVoyage.Entities.Personne;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Display;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.List;

/**
 *
 * @author Saafi_Amine
 */
public class PersonneList extends List implements CommandListener,Runnable {

    Display disp;
    
    Command cmdAjout = new Command("Add account", Command.SCREEN, 0);
    Command cmdExit = new Command("Exit", Command.EXIT, 0);
    Command cmdDel = new Command("Delete account", Command.SCREEN, 0);
    Command cmdMod = new Command("Update account", Command.SCREEN, 0);
    static int choice;

    public PersonneList(){
        super("Accounts list", List.IMPLICIT);
        addCommand(cmdAjout);
        addCommand(cmdExit);
        addCommand(cmdDel);
        addCommand(cmdMod);
        setCommandListener(this);
        Thread th = new Thread(this);
        th.start();
    }
//    public PersonneList(String title, int listType, Display d) {
//        super("Liste des comptes", List.IMPLICIT);
//        disp = d;
//        addCommand(cmdAjout);
//        addCommand(cmdExit);
//        addCommand(cmdDel);
//        addCommand(cmdMod);
//        setCommandListener(this);
//        Thread th = new Thread(this);
//        th.start();
//        
//        
//    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdAjout) {
            Midlet.INSTANCE.disp.setCurrent(new personneAjoutForm());
        }
        if (c == cmdExit) {
            Midlet.INSTANCE.disp.setCurrent(new AdminMenu());
        }
        if (c == cmdDel) {
            
            
            Midlet.INSTANCE.disp.setCurrent(new personneDeleteForm());
        }
        if (c == cmdMod) {
            Midlet.INSTANCE.disp.setCurrent(new personneUpdateForm());
        }
    }

    public void run() {
        Personne[] perso = new PersonneDAO().select();
        if (perso.length > 0) {
            for (int i = 0; i < perso.length; i++) {
                append(perso[i].getId()+ " - " +perso[i].getNom()+ " - " + perso[i].getPrenom()
                                        + " - " +perso[i].getUsername()+ " - " + perso[i].getMail()
                                        + " - " +perso[i].getPassword() + "\n ---------------------------------------- " , null);
            }
        }
    }

}
