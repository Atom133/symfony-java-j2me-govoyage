/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.ForumDAO;
import GoVoyage.Entities.Forum;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.List;

/**
 *
 * @author sawsse
 */
public class ForumList extends List implements CommandListener,Runnable {
    Forum[] forums = new ForumDAO().select();
    public static int id_forum;
    
    Command cmdAjout = new Command("Add", Command.SCREEN, 0);
    Command cmdExit = new Command("Exit", Command.EXIT, 0);
    Command cmddel = new Command("Delete", Command.SCREEN, 0);
    Command cmdmod = new Command("Modify", Command.SCREEN, 0);
    Command cmdrpd = new Command("Respond", Command.SCREEN, 0);
    Command cmdrec = new Command("Send SMS", Command.SCREEN, 0);



    public ForumList() {
        super("Forum List", List.IMPLICIT);
        addCommand(cmdAjout);
        addCommand(cmdExit);
        addCommand(cmddel);
        addCommand(cmdmod);
        addCommand(cmdrec);
        addCommand(cmdrpd);
        setCommandListener(this);
        Thread th = new Thread(this);
        th.start();
        
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdAjout) {
            Midlet.INSTANCE.disp.setCurrent(new ForumAdd());
        }
        if (c == cmdExit) {
            Midlet.INSTANCE.disp.setCurrent(new MemberMenu());
        }
        if (c == cmddel) {
            Midlet.INSTANCE.disp.setCurrent(new ForumDelete());
        }
        if (c == cmdmod) {
            Midlet.INSTANCE.disp.setCurrent(new ForumUpdate());
        }
         if (c ==  cmdrec) {
            Midlet.INSTANCE.disp.setCurrent(new Sms() );
        }
         if (c ==  cmdrpd) {
             id_forum = forums[this.getSelectedIndex()].getId();
             
            Midlet.INSTANCE.disp.setCurrent(new ForumRespond());
        }
    }

    public void run() {
        Forum[] forums = new ForumDAO().select();
        if (forums.length > 0) {
            for (int i = 0; i < forums.length; i++) {
                append("Title : "+forums[i].getTitle() + " \nPost : " + forums[i].getContenu()+ " \n------------------------------------------ ", null);
            }
        }
    }

}
