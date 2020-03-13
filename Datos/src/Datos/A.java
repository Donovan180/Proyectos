
package Datos;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;

public class A {
    String[][] Matriz=new String[10][5];
    File f=new File("NetBeansProjects//Datos/valores/datos.txt");
    public void setMatriz(String[][] m){
        Matriz=m;
    }
    public String[][] getMatriz(){
    return Matriz;
    }
    public void cargarmatriz() throws IOException{
    String a;
    int x=0;
        if(f.exists()){
        FileReader fr=new FileReader(f);
        BufferedReader B=new BufferedReader(fr);
        while((a=B.readLine())!=null){
            String[] linea=a.split(" ");
            for(int i=0;i<linea.length;i++){
                Matriz[x][i]=linea[i];
            }
            x++;
    }
    }
        for(int i=0;i<Matriz.length;i++){
            for(int j=0;j<Matriz[0].length;j++){
                if(Matriz[i][j]==null){
                    Matriz[i][j]="";
                }
            }
        }
    }
    public void Escribirarchivo() throws IOException{
        FileWriter Fw=new FileWriter(f);
        PrintWriter P=new PrintWriter(Fw);
        for(int i=0;i<Matriz.length;i++){
            P.println(Matriz[i][0]+","+Matriz[i][1]+","+Matriz[i][2]+","+Matriz[i][3]+","+Matriz[i][4]);
        }
        P.close();
    }
}
