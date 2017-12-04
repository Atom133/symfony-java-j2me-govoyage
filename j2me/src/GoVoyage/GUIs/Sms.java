/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage.GUIs;

import GoVoyage.Midlet;
import javax.microedition.io.Connector;
import javax.microedition.lcdui.Alert;
import javax.microedition.lcdui.AlertType;
import javax.microedition.lcdui.Command;
import javax.microedition.lcdui.CommandListener;
import javax.microedition.lcdui.Displayable;
import javax.microedition.lcdui.Form;
import javax.microedition.lcdui.TextField;
import javax.wireless.messaging.MessageConnection;
import javax.wireless.messaging.TextMessage;

/**
 *
 * @author lenovo
 */
public class Sms extends Form implements CommandListener,Runnable{
    
    Command cmdback = new Command("back", Command.BACK, 0);
    Command cmdsend = new Command("send", Command.SCREEN, 0);
    
      private TextField toWhom=new TextField("To","",10,TextField.PHONENUMBER);;
      private TextField message=new TextField("Message","",600,TextField.ANY);;
      private Alert alert;
      MessageConnection clientConn;
      
      
      public Sms() {
        super("Hotel");
        append(toWhom);
        append(message);
        addCommand(cmdsend);
        addCommand(cmdback);
        setCommandListener(this);
      }

    

    public void commandAction(Command c, Displayable d) {
      if(c==cmdsend) {
               Thread th=new Thread(this);
               th.start();
      }
     if(c==cmdback) {
               
               
               Midlet.INSTANCE.disp.setCurrent(new ExpList());
      }
    }

    public void run() {
       String mno=toWhom.getString();
                  String msg=message.getString();
                  if(mno.equals("")) {
                        alert = new Alert("Alert");
                        alert.setString("Enter Mobile Number!!!");
                        alert.setTimeout(2000);
                        Midlet.INSTANCE.disp.setCurrent(alert);
                  }
                  else {
                        try {
                              clientConn=(MessageConnection)Connector.open("sms://"+mno);
                        }
                        catch(Exception e) {
                              alert = new Alert("Alert");
                              alert.setString("Unable to connect to Station because of network problem");
                              alert.setTimeout(2000);
                              Midlet.INSTANCE.disp.setCurrent(alert);
                        }
                        try {
                              TextMessage textmessage = (TextMessage) clientConn.newMessage(MessageConnection.TEXT_MESSAGE);
                              textmessage.setAddress("sms://"+mno);
                              textmessage.setPayloadText(msg);
                              clientConn.send(textmessage);
                        }
                        catch(Exception e)
                        {
                              Alert alert=new Alert("Alert","",null,AlertType.INFO);
                              alert.setTimeout(Alert.FOREVER);
                              alert.setString("Unable to send");
                             Midlet.INSTANCE.disp.setCurrent(alert);
                        }
                  }
            }
}
