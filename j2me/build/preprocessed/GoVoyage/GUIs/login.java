/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import GoVoyage.DAOs.*;
import GoVoyage.Entities.*;
import javax.microedition.lcdui.*;

/**
 *
 * @author lenovo
 */
public class login extends Form implements CommandListener, Runnable {

    TextField tf_usr = new TextField("Username", "", 20, TextField.ANY);
    TextField tf_pwd = new TextField("Password", "", 20, TextField.PASSWORD);

    String[] ch = {"Log in as admin"};

    ChoiceGroup cg = new ChoiceGroup("", ChoiceGroup.MULTIPLE, ch, null);

    Command cmdlog = new Command("login", Command.SCREEN, 0);
    Command cmdBack = new Command("Exit", Command.EXIT, 0);

    public login() {
        super("Login");

        append(tf_usr);
        append(tf_pwd);
        append(cg);
        addCommand(cmdlog);
        addCommand(cmdBack);
        setCommandListener(this);
    }

    public void commandAction(Command c, Displayable d) {
        if (c == cmdBack) {
            Midlet.INSTANCE.notifyDestroyed();
        }
        if (c == cmdlog) {
            Thread th = new Thread(this);
            th.start();
        }

    }

    public void run() {
        String usr = tf_usr.getString();
        String pwd = tf_pwd.getString();

        boolean result = new LoginDAO().login(usr, pwd);
        Alert alert = new Alert("Result");
        if (result) {
            if (cg.isSelected(0)) {
                if (Personne.getRole().equals("a:1:{i:0;s:16:\\\"ROLE_SUPER_ADMIN\\\";}")) {

                    alert.setType(AlertType.CONFIRMATION);
                    alert.setString("You are logged in as " + Personne.F_Name + " " + Personne.L_Name);
                    Midlet.INSTANCE.disp.setCurrent(alert, new AdminMenu());
                } else {
                    alert.setType(AlertType.ERROR);
                    alert.setString("This user is not an admin!");
                    Midlet.INSTANCE.disp.setCurrent(alert);
                }

            } else {

                alert.setType(AlertType.CONFIRMATION);
                alert.setString("You are logged in as " + Personne.F_Name + " " + Personne.L_Name);
                Midlet.INSTANCE.disp.setCurrent(alert, new MemberMenu());
            }
        } else {
            alert.setType(AlertType.ERROR);
            alert.setString("ERROR!");
            Midlet.INSTANCE.disp.setCurrent(alert);
        }
    }

}
