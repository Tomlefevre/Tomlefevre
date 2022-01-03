package LeSytemeSolaire;
import utils.Draw;

import java.awt.*;

public class Main {
    public static void main(String[] args) {

        Draw pannel = new Draw();
        pannel.enableDoubleBuffering();

        Planete Soleil = new Planete(Color.YELLOW);
        System SystemeSolaire = new System(Soleil);

        SystemeSolaire.addToPlanetes(new Planete(0.1,87.96,Color.GRAY)); //Mercure
        SystemeSolaire.addToPlanetes(new Planete(0.15,224.69, Color.YELLOW)); //Vénus
        SystemeSolaire.addToPlanetes(new Planete(0.2,365.25, Color.BLUE)); //Terre
        SystemeSolaire.addToPlanetes(new Planete(0.25,686.97, Color.RED)); //Mars
        SystemeSolaire.addToPlanetes(new Planete(0.3,4332.59, Color.MAGENTA)); //Jupiter
        SystemeSolaire.addToPlanetes(new Planete(0.35,10759.23, Color.DARK_GRAY)); //Saturne
        SystemeSolaire.addToPlanetes(new Planete(0.4,30685.4, Color.CYAN)); //Uranus
        SystemeSolaire.addToPlanetes(new Planete(0.45,60216.8, Color.PINK)); //Neptune

        HorlogeUniverselle horlogeUniverselle = new HorlogeUniverselle();
        Thread thread = new Thread(horlogeUniverselle);
        thread.start();

        while (true){

            //all keycode found at : http://gcctech.org/csc/javascript/javascript_keycodes.htm

            //add one day per sencond to the clock's factor
            if(pannel.isKeyPressed(39)){
                if(horlogeUniverselle.getFactor()<500){
                    horlogeUniverselle.setFactor(horlogeUniverselle.getFactor()+1);
                }
            }

            //remove one day per sencond to the clock's factor
            if(pannel.isKeyPressed(37)){
                if(horlogeUniverselle.getFactor()>1){
                    horlogeUniverselle.setFactor(horlogeUniverselle.getFactor()-1);
                }
            }

            //set the number of days per second to 15 (default factor)
            if (pannel.isKeyPressed(17)){
                horlogeUniverselle.setFactor(15);
            }

            SystemeSolaire.updateGalaxie(horlogeUniverselle,pannel);
            pannel.setPenColor(Color.WHITE);

            pannel.textLeft(0.02,0.05,"Nombre de jour par seconde : " + horlogeUniverselle.getFactor());

            pannel.show();
        }
    }
}
