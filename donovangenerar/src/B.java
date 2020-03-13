import javax.swing.JOptionPane;
public class B extends A {
    public static C u=new C();
    public void num(String o,String w){
    int p=0;
        int g=o.length();
        for(int i=0;i<g;i++){
            int v=(int)o.charAt(i);
            if(v>47 && v<58){
             p++;
            }
        }
            if(p>=3){
                u.esp(w);
            }
            else{
                JOptionPane.showMessageDialog(null,"faltan numeros");
            }
    }
    
}
