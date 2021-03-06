/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique;


import com.esprit.dao.entities.Abonné;
import com.esprit.dao.entities.Newslettre;

import com.esprit.implementations.Impabonné;
import com.esprit.implementations.Impnewslettre;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;
import java.util.Properties;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import javax.swing.JOptionPane;
import javax.mail.*;
import javax.mail.internet.*;
import javax.swing.ImageIcon;

/**
 *
 * @author mehdikarray
 */
public class GUINewslettre extends javax.swing.JFrame {

    /**
     * Creates new form GUINewslettre
     */
    public GUINewslettre() {
        
        this.setTitle("Envoyer Newslettre");
        this.setDefaultCloseOperation(Abonnement.DISPOSE_ON_CLOSE);
        initComponents();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jTextArea1 = new javax.swing.JTextArea();
        jButton2 = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();
        jScrollPane1 = new javax.swing.JScrollPane();
        jLabel2 = new javax.swing.JLabel();
        jTextField1 = new javax.swing.JTextField();
        jLabel3 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);
        addWindowListener(new java.awt.event.WindowAdapter() {
            public void windowOpened(java.awt.event.WindowEvent evt) {
                formWindowOpened(evt);
            }
        });

        jPanel1.setBackground(new java.awt.Color(255, 255, 255));
        jPanel1.setLayout(null);

        jTextArea1.setColumns(20);
        jTextArea1.setRows(5);
        jPanel1.add(jTextArea1);
        jTextArea1.setBounds(10, 110, 560, 220);

        jButton2.setBackground(new java.awt.Color(0, 102, 102));
        jButton2.setText("ENVOYER");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });
        jPanel1.add(jButton2);
        jButton2.setBounds(240, 340, 90, 30);

        jLabel1.setIcon(new javax.swing.ImageIcon(getClass().getResource("/com/esprit/dao/graphique/agence-de-voyage1.jpg"))); // NOI18N
        jPanel1.add(jLabel1);
        jLabel1.setBounds(140, 170, 290, 300);
        jPanel1.add(jScrollPane1);
        jScrollPane1.setBounds(200, 120, 2, 2);

        jLabel2.setFont(new java.awt.Font("Aharoni", 0, 14)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(0, 102, 102));
        jLabel2.setText("Titre de la newslettre ");
        jPanel1.add(jLabel2);
        jLabel2.setBounds(10, 10, 200, 20);

        jTextField1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jTextField1ActionPerformed(evt);
            }
        });
        jPanel1.add(jTextField1);
        jTextField1.setBounds(10, 40, 380, 30);

        jLabel3.setFont(new java.awt.Font("Aharoni", 0, 14)); // NOI18N
        jLabel3.setForeground(new java.awt.Color(0, 102, 102));
        jLabel3.setText("Contenue de la newslettre ");
        jPanel1.add(jLabel3);
        jLabel3.setBounds(10, 80, 240, 15);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, 579, javax.swing.GroupLayout.PREFERRED_SIZE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, 473, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(0, 0, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jTextField1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jTextField1ActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_jTextField1ActionPerformed

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
       String titre=jTextField1.getText();
       String detail=jTextArea1.getText();
       Date actuelle = new Date();
       DateFormat dateFormat = new SimpleDateFormat("dd/MM/yyyy");
       String dat = dateFormat.format(actuelle); 
       
       Impabonné abonné=new Impabonné();
       Impnewslettre newslettre=new Impnewslettre();
       Newslettre n =new Newslettre();
       n.setDate(dat);
       n.setTexte(detail);
       n.setTitre(titre);
       
       newslettre.insertnewslettre(n);
       List<Abonné>mail=abonné.allmail();
       
      
       
       String []to = new String[mail.size()];
       
       
    for(int i=0;i<mail.size();i++){ 
    to[i] = mail.get(i).getMail_abonné();

    }
    
    
    
    String smtpHost = "smtp.gmail.com";
    String from = "3a14.all.in@gmail.com";
//    String[] to = {"mehdikray@gmail.com","mehdi.karray@esprit.tn","islem.naouara@esprit.tn"};
//    String to = "mehdikray@gmail.com,mehdi.karray@esprit.tn";
    String username = "3a14.all.in";
    String password = "besttrip";
 
    Properties props = new Properties();
    props.put("mail.smtp.host", smtpHost);
    props.put("mail.smtp.auth", "true");
    props.put("mail.smtp.port", "587");
    props.put("mail.smtp.starttls.enable", "true");
    props.put("mail.smtp.ssl.trust", "smtp.gmail.com");
 
    Session session = Session.getDefaultInstance(props);
    session.setDebug(true);
 
    MimeMessage message = new MimeMessage(session);
    try {
            message.setFrom(new InternetAddress(from));
            InternetAddress[] addressTo = new InternetAddress[to.length];
            for (int i = 0; i < to.length; i++)
            {
                addressTo[i] = new InternetAddress(to[i]);
            }
            message.setRecipients(MimeMessage.RecipientType.TO, addressTo); 
    message.setFrom(new InternetAddress(from));
//    message.setRecipients(Message.RecipientType.CC, to);
//    message.addRecipient(Message.RecipientType.CC, new InternetAddress(to));
    message.setSubject(titre);
    message.setText(detail);
 
    Transport tr = session.getTransport("smtp");
    tr.connect(smtpHost, username, password);
    message.saveChanges();
 
    
    tr.sendMessage(message,message.getAllRecipients());
    tr.close();
           JOptionPane.showMessageDialog(null,"newslettre send");
    }
    catch(Exception exc) {
         JOptionPane.showMessageDialog(null,"Echec de l'envoi de la newslettre","Erreur",JOptionPane.WARNING_MESSAGE);
            System.out.println(exc);
        }
    
         
       

    }//GEN-LAST:event_jButton2ActionPerformed

    private void formWindowOpened(java.awt.event.WindowEvent evt) {//GEN-FIRST:event_formWindowOpened
       jTextArea1.setOpaque(false);
    }//GEN-LAST:event_formWindowOpened

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(GUINewslettre.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(GUINewslettre.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(GUINewslettre.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(GUINewslettre.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new GUINewslettre().setVisible(true);
            }
        });
    }
    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton2;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JTextArea jTextArea1;
    private javax.swing.JTextField jTextField1;
    // End of variables declaration//GEN-END:variables
}
