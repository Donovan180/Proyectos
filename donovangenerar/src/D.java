
import javax.swing.JOptionPane;

public class D extends C {
    public static C n=new C();
    public void minus(String o,String val, String val2,String d,String s){
    int w=0;
        int e=o.length();
        int a=val.length();
        int b=val2.length();
        
        for(int i=0;i<e;i++){
            int v=(int)o.charAt(i);
                if(v>96 && v<123){
                    
                   for(int f=0;f<a;f++){
                      int v1=(int)val.charAt(f);
                         if(v1>96 && v1<123){
                             
                            for(int g=0;g<b;g++){
                              int v2=(int)val2.charAt(g);
                                if(v2>96 && v2<123){
                                   w++;
                                   }
                                  }
                                 }
                                }
                               }
                              }
            if(w>=3){
                n.ob(o,val,val2,d,s);
            }
            else{
                JOptionPane.showMessageDialog(null,"faltan minusculas");
            }
    }
}
