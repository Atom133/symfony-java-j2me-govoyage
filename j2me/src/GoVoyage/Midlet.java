/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GoVoyage;

import GoVoyage.GUIs.login;
import GoVoyage.Splashes.SplashScreen1;
import java.io.IOException;
import javax.microedition.lcdui.*;
import javax.microedition.midlet.*;

/**
 * @author lenovo
 */
public class Midlet extends MIDlet {

    public Display disp = Display.getDisplay(this); 
    public Image[] img = new Image[5];
   public Image[] img_m = new Image[4];
   public Image[] img_a = new Image[5];
    
     

    public static Midlet INSTANCE = null;

    public void startApp() {
        INSTANCE = this;
        disp.setCurrent(new login());

        try {
            for (int i=0;i<5;i++){
            img[i] = Image.createImage("GoVoyage/Pics/star.png");}
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        
        try {
            img_m[0] = Image.createImage("GoVoyage/Pics/exp.png");
            img_m[1] = Image.createImage("GoVoyage/Pics/comment.png");
            img_m[2] = Image.createImage("GoVoyage/Pics/hotel.png");
            img_m[3] = Image.createImage("GoVoyage/Pics/map.png");
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        try {
            img_a[0] = Image.createImage("GoVoyage/Pics/exp.png");
            img_a[1] = Image.createImage("GoVoyage/Pics/hotel.png");
            img_a[2] = Image.createImage("GoVoyage/Pics/flight.png");
            img_a[3] = Image.createImage("GoVoyage/Pics/User.png");
            img_a[4] = Image.createImage("GoVoyage/Pics/map.png");
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        
        
    }

    public void pauseApp() {
    }

    public void destroyApp(boolean unconditional) {
    }
}
