package LeSytemeSolaire;

import utils.Draw;

import java.awt.*;
import java.util.ArrayList;

public class System {

    private ArrayList<Planete> planetes = new ArrayList<>();
    private Planete centralStar;

    public System(Planete planete){
        this.centralStar = planete;
    }

    public void addToPlanetes(Planete planete){
        planetes.add(planete);
    }

    public void updateGalaxie(HorlogeUniverselle horlogeUniverselle, Draw draw){
        draw.clear(Color.BLACK);

        draw.setPenColor(centralStar.getColor());
        draw.filledCircle(0.5,0.5,0.03);

        for(Planete planete : planetes){

            double angle = 360 * (horlogeUniverselle.getTime()%planete.getRevolutionTime() / planete.getRevolutionTime());

            planete.setPositionX(centralStar.getPositionX()+(planete.getDistance()*Math.cos(angle*Math.PI/180)));
            planete.setPositionY(centralStar.getPositionY()+(planete.getDistance()*Math.sin(angle*Math.PI/180)));

            draw.setPenColor(planete.getColor());
            draw.filledCircle(planete.getPositionX(), planete.getPositionY(), 0.015);
        }
    }

}
