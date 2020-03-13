  import javax.swing.JOptionPane;
public class Coversor extends javax.swing.JFrame {
public static String bin="",oct="",hexa="";
public static String resultado="",r1="",r3="";
    public Coversor() {
        initComponents();
    }
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        valor = new javax.swing.JTextField();
        jButton1 = new javax.swing.JButton();
        res = new javax.swing.JTextField();
        selecion = new javax.swing.JComboBox();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jButton1.setText("convertir");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });

        selecion.setModel(new javax.swing.DefaultComboBoxModel(new String[] { "Selecciona", "Binario", "Octal", "Hexadecimal" }));
        selecion.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                selecionActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(31, 31, 31)
                .addComponent(jButton1)
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(res, javax.swing.GroupLayout.DEFAULT_SIZE, 224, Short.MAX_VALUE)
                    .addComponent(valor))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 76, Short.MAX_VALUE)
                .addComponent(selecion, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(56, 56, 56))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(38, 38, 38)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(valor, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jButton1)
                    .addComponent(selecion, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(40, 40, 40)
                .addComponent(res, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(43, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
       double a=Double.parseDouble(valor.getText());
       if(a % 1 == 0){
           if(selecion.getSelectedItem()=="Selecciona"){
               JOptionPane.showMessageDialog(null, "Debes Seleccionar una opción");
           }
        if(selecion.getSelectedItem()=="Binario"){
           JOptionPane.showMessageDialog(null,"Binario");
         String v=valor.getText();
      int z=Integer.parseInt(v);
      binario(z);
      result();
       }
       if(selecion.getSelectedItem()=="Octal"){
           String v=valor.getText();
      int z=Integer.parseInt(v);
      oc(z);
      resoc();
       }
        if(selecion.getSelectedItem()=="Hexadecimal"){
            String v=valor.getText();
      int z=Integer.parseInt(v);
      hex(z);
     
        }
        
       }else{
        JOptionPane.showMessageDialog(null,"Solo numero enteros");
       }
    }//GEN-LAST:event_jButton1ActionPerformed

    private void selecionActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_selecionActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_selecionActionPerformed

    public static void main(String args[]) {
        
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Coversor().setVisible(true);
            }
        });
    }
    public void binario(int x){
        int r=x%2;
        int r2=(x-r)/2;
        if(x>0){
            bin=bin+r;
            binario(r2);
            }
    }// metodo binario
    public void result(){
        int w=(bin.length())-1;
            for(int i=w;i>=0;i--){
                resultado=resultado+(bin.charAt(i));   
        }
    res.setText(resultado); 
    }
    
    
    public void oc(int n){
    int r=n%8;
        int r2=(n-r)/8;
        if(n>0){
            oct=oct+r;
            oc(r2);
    }
    }
    public void resoc(){
    int w=(oct.length())-1;
            for(int i=w;i>=0;i--){
                r1=r1+(oct.charAt(i));   
        }
    res.setText(r1); 
    }
    
    public void hex(int n2){
     int r=n2%16;
        int r2=(n2-r)/16;
    
     if(r2==10){
         res.setText("A");
     }
     else if(r2==11){
     }
     else if(r2==12){
     }
     else if(r2==13){
     }
     else if(r2==14){
     }
     else if(r2==15){
     }
      if(n2>0){
          hexa=hexa+r;
            hex(r2); 
    }
    }
    
   
   

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private static javax.swing.JTextField res;
    private javax.swing.JComboBox selecion;
    private javax.swing.JTextField valor;
    // End of variables declaration//GEN-END:variables

    
}
