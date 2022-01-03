package LeSytemeSolaire;

import java.awt.*;

public class Planete {
    private double positionX;
    private double positionY;
    private double distance;
    private double revolutionTime;
    private Color color ;

    public Planete(Color color){
        this.color = color;
        this.positionY = 0.5;
        this.positionX = 0.5;
    }

    public Planete ( double distance, double revolutionTime /*in days*/, Color color){
        this.distance=distance;
        this.revolutionTime = revolutionTime*500;
        this.color=color;
        this.positionX=0.5+distance;
        this.positionY=0.5;
    }

    public Color getColor() {
        return color;
    }

    public double getPositionX() {
        return positionX;
    }

    public double getPositionY() {
        return positionY;
    }

    public void setPositionX(double positionX){
        this.positionX = positionX;
    }

    public void setPositionY(double positionY){
        this.positionY = positionY;
    }

    public double getDistance() {
        return distance;
    }

    public double getRevolutionTime(){
        return  revolutionTime;
    }

}