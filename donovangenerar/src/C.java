
import javax.swing.JOptionPane;
public class C extends B{
public void esp(String o){
 int b=0;
        int g=o.length();
        for(int i=0;i<g;i++){
            int v=(int)o.charAt(i);
            if(v>33 && v<47 || v>58 && v<64 || v>91 && v<96 || v>123 && v<126 || v>161 && v<174){
             b++;
            }
        }
            if(b>=3){
               JOptionPane.showMessageDialog(null,"contraseña valida");
            }
            else{
                JOptionPane.showMessageDialog(null,"faltan caracteres especiales");
            }
}    
}
