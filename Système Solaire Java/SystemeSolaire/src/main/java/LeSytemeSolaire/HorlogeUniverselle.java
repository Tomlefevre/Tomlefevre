package LeSytemeSolaire;

import java.time.Instant;

public class HorlogeUniverselle extends Thread{

    private long time;
    private int factor = 15;

    public HorlogeUniverselle() {
        this.time = Instant.now().toEpochMilli();
    }

    @Override
    public void run(){
       while (true){
           try {
               Thread.sleep(1);
               time = time + factor;
           } catch (InterruptedException e) {
               e.printStackTrace();
           }
       }
    }

    public long getTime(){
        return time;
    }

    public int getFactor(){
        return factor;
    }

    public void setFactor(int factor){
        this.factor = factor;
    }

}
