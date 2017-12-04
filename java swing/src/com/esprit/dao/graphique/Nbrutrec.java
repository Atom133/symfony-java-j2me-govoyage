/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package com.esprit.dao.graphique;

/**
 *
 * @author PC
 */

import com.esprit.dao.entities.Evenement;


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
public class Nbrutrec extends JPanel {
        
    public Nbrutrec() {
       
        JFreeChart localJFreeChart = ChartFactory.createRingChart("les utilisateurs les plus actifs par évènement", createDataset(), false, true, false);
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
        ResultSet rs= d.executeQuery("SELECT COUNT( * ) , nom FROM utilisateur, publication WHERE utilisateur.idutilisateur = publication.idutilisateur AND publication.type_publication='evenement' group BY (utilisateur.idutilisateur)");

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
   