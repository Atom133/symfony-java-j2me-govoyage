/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.esprit.dao.graphique;

import java.awt.Font;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JPanel;
import org.jfree.chart.ChartFactory;
import org.jfree.chart.ChartPanel;
import org.jfree.chart.JFreeChart;
import org.jfree.chart.plot.RingPlot;
import org.jfree.data.general.DefaultPieDataset;
import org.jfree.data.general.PieDataset;

/**
 *
 * @author islem_nawara
 */
public class UtilisateurParExperience extends JPanel {

    public UtilisateurParExperience() {
         JFreeChart localJFreeChart = ChartFactory.createRingChart("les utilisateurs qui publie les plus d'experiance", createDataset(), false, true, false);
        RingPlot localRingPlot = (RingPlot) localJFreeChart.getPlot();
        localRingPlot.setLabelFont(new Font("SansSerif", 0, 12));
        localRingPlot.setNoDataMessage("No data available");
        localRingPlot.setSectionDepth(0.35D);
        localRingPlot.setCircular(false);
        localRingPlot.setLabelGap(0.02D);
        ChartPanel localChartPanel = new ChartPanel(localJFreeChart);
        this.add(localChartPanel);
    }
    
    
      private  PieDataset createDataset() {
        Connection cnx;
        Dao d=new Dao();
        ResultSet rs= d.executeQuery("SELECT COUNT( * ) , username FROM fos_user, publication WHERE fos_user.id = publication.idUser AND publication.type_publication='Experience' group BY (fos_user.id)");

        DefaultPieDataset localDefaultPieDataset = new DefaultPieDataset();
        try {
            while(rs.next()){
                localDefaultPieDataset.setValue(rs.getString(2),rs.getInt(1));
            }
        } catch (SQLException ex) {
            Logger.getLogger(Nbrutrec.class.getName()).log(Level.SEVERE, null, ex);
        }
        return localDefaultPieDataset;
    }
}
