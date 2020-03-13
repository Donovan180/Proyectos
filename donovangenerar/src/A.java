import javax.swing.JOptionPane;
public class A {
    public static C t=new C();
    public void ob(String o,String n,String h,String w,String q){
   int e=0;
   int e1=0;
   int e2=0;
   int e4=0;
        int g=o.length();
        int ma1=n.length();
        int ma2=h.length();
        
        for(int i=0;i<g;i++){
            int v=(int)o.charAt(i);
            if(v>65 && v<90){
                 e++;
                for(int f=0;f<ma1;f++){
            int v1=(int)n.charAt(f);
            if(v1>65 && v1<90){
                e1++;
                for(int r=0;r<ma2;r++){
            int v2=(int)h.charAt(r);
            if(v2>65 && v2<90){
            e2++;
            e4=e+e1+e2;
            }
           }
          }
         }
        }
       }
            if(e4>=3){
                t.num(w,q);
            }
            else{
                JOptionPane.showMessageDialog(null,"faltan mayusculas");
            }
    }
    
}
