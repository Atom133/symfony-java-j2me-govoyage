/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique;

import com.esprit.dao.entities.Fos_user;
import com.esprit.implementations.UtilisateurDAO;
import javax.swing.JButton;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;

/**
 *
 * @author islem_nawara
 */
public class NewJFrame extends javax.swing.JFrame {
    Fos_user user=new Fos_user();

    
    public NewJFrame() {
        initComponents();
 
        jTextField8.setVisible(false);
        jTextField9.setVisible(false);
       
        jTextField11.setVisible(false);
          this.setSize(770,600);
    }

    public JButton getjButton1() {
        return jButton1;
    }

    public JLabel getjLabel1() {
        return jLabel1;
    }

    

    

    public JLabel getjLabel4() {
        return jLabel4;
    }

    public JLabel getjLabel5() {
        return jLabel5;
    }

    

    public JPanel getjPanel1() {
        return jPanel1;
    }

    

   

    

    public JTextField getjTextField3() {
        return jTextField3;
    }

    public JTextField getjTextField4() {
        return jTextField4;
    }
    

    

    

    

   

    public JTextField getjTextField8() {
        return jTextField8;
    }

    public JTextField getjTextField9() {
        return jTextField9;
    }

    public JPasswordField getjPasswordField1() {
        return jPasswordField1;
    }

    public void setjButton1(JButton jButton1) {
        this.jButton1 = jButton1;
    }

    public void setjLabel1(JLabel jLabel1) {
        this.jLabel1 = jLabel1;
    }

    

    

    public void setjLabel4(JLabel jLabel4) {
        this.jLabel4 = jLabel4;
    }

    public void setjLabel5(JLabel jLabel5) {
        this.jLabel5 = jLabel5;
    }

    

    public void setjPanel1(JPanel jPanel1) {
        this.jPanel1 = jPanel1;
    }

    

   

    

    public void setjTextField3(JTextField jTextField3) {
        this.jTextField3 = jTextField3;
    }

    public void setjPasswordField1(JPasswordField jPasswordField1) {
        this.jPasswordField1 = jPasswordField1;
    }

    

    

    

    

    public void setjTextField8(JTextField jTextField8) {
        this.jTextField8 = jTextField8;
    }

    public void setjTextField9(JTextField jTextField9) {
        this.jTextField9 = jTextField9;
    }

    public void setjTextField4(JTextField jTextField4) {
        this.jTextField4 = jTextField4;
    }
    
    

    
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jLabel4 = new javax.swing.JLabel();
        jLabel5 = new javax.swing.JLabel();
        jTextField3 = new javax.swing.JTextField();
        jButton1 = new javax.swing.JButton();
        jTextField8 = new javax.swing.JTextField();
        jTextField9 = new javax.swing.JTextField();
        jPasswordField1 = new javax.swing.JPasswordField();
        jLabel7 = new javax.swing.JLabel();
        jTextField4 = new javax.swing.JTextField();
        jTextField11 = new javax.swing.JTextField();
        jButton2 = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);
        getContentPane().setLayout(new javax.swing.OverlayLayout(getContentPane()));

        jPanel1.setBackground(new java.awt.Color(250, 240, 240));
        jPanel1.setLayout(null);

        jLabel4.setFont(new java.awt.Font("Aharoni", 1, 18)); // NOI18N
        jLabel4.setText("login :");
        jPanel1.add(jLabel4);
        jLabel4.setBounds(100, 60, 80, 30);

        jLabel5.setFont(new java.awt.Font("Aharoni", 1, 18)); // NOI18N
        jLabel5.setText("Mot de passe :");
        jPanel1.add(jLabel5);
        jLabel5.setBounds(100, 150, 140, 30);
        jPanel1.add(jTextField3);
        jTextField3.setBounds(320, 60, 170, 30);

        jButton1.setText("Valider");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });
        jPanel1.add(jButton1);
        jButton1.setBounds(270, 440, 90, 30);

        jTextField8.setForeground(new java.awt.Color(204, 0, 0));
        jTextField8.setText("Ajouter votre login");
        jTextField8.setOpaque(false);
        jPanel1.add(jTextField8);
        jTextField8.setBounds(320, 100, 210, 20);

        jTextField9.setForeground(new java.awt.Color(204, 0, 0));
        jTextField9.setText("Ajouter mot de passe");
        jTextField9.setOpaque(false);
        jPanel1.add(jTextField9);
        jTextField9.setBounds(320, 180, 210, 20);
        jPanel1.add(jPasswordField1);
        jPasswordField1.setBounds(320, 150, 170, 30);

        jLabel7.setFont(new java.awt.Font("Aharoni", 1, 18)); // NOI18N
        jLabel7.setText("e-mail :");
        jPanel1.add(jLabel7);
        jLabel7.setBounds(100, 290, 80, 20);
        jPanel1.add(jTextField4);
        jTextField4.setBounds(320, 290, 170, 30);

        jTextField11.setForeground(new java.awt.Color(204, 51, 0));
        jTextField11.setText("Ajouter votre E-mail ");
        jTextField11.setOpaque(false);
        jPanel1.add(jTextField11);
        jTextField11.setBounds(320, 320, 210, 20);

        jButton2.setText("Annuler");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });
        jPanel1.add(jButton2);
        jButton2.setBounds(430, 440, 90, 30);
        jPanel1.add(jLabel1);
        jLabel1.setBounds(0, 0, 750, 490);

        getContentPane().add(jPanel1);

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
         
           if  (jTextField3.getText().trim().equals(""))
         {
                jTextField8.setVisible(true);
         }
            if  (jPasswordField1.getText().trim().equals(""))
         {
                jTextField9.setVisible(true);
         }
     
             else 
             {
     String login;
     String nom;
     String prenom;
      String mdp;
       String pseudo;
       String mail;
       String salt;
       String role;
       int locked;
        int enabled;
         int expired;
         int credentials_expired;
      login=getjTextField3().getText();
      mdp=getjPasswordField1().getText()+"{dey1s7f4gbso0gwwk0gwswskk40scss}";

      mail=getjTextField4().getText();
      salt="dey1s7f4gbso0gwwk0gwswskk40scss";
      role= "a:1:{i:0;s:9:\"ROLE_USER\";}" ;
       locked=0;
        enabled=1;
         expired=0;
         credentials_expired=0;
       user.setUsername_canonical(login);
      user.setMdp(mdp);
      user.setUsername(login);
      user.setEmail(mail);
      user.setSalt(salt);
      user.setEmail_canonical(mail);
      user.setEnabled(enabled);
      user.setExpired(expired);
      user.setLocked(locked);
      user.setCredentials_expired(credentials_expired);
      user.setRoles(role);
                 System.out.println("user="+user);
      
      UtilisateurDAO dao=new UtilisateurDAO();
      dao.insertUtilisateur(user);
      JOptionPane.showMessageDialog(null,"Compte est ajouté");
             }
         
    }//GEN-LAST:event_jButton1ActionPerformed

    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        System.exit(0);
    }//GEN-LAST:event_jButton2ActionPerformed

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
            java.util.logging.Logger.getLogger(NewJFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(NewJFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(NewJFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(NewJFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new NewJFrame().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPasswordField jPasswordField1;
    private javax.swing.JTextField jTextField11;
    private javax.swing.JTextField jTextField3;
    private javax.swing.JTextField jTextField4;
    private javax.swing.JTextField jTextField8;
    private javax.swing.JTextField jTextField9;
    // End of variables declaration//GEN-END:variables
}
