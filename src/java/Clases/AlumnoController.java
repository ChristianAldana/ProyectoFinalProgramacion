/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Clases;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

/**
 *
 * @carjr
 */
public class AlumnoController {
      Alumno[] tablaALumno;
    int indiceArray;
    private ConexionBaseDeDatos conectorBD;
    private Connection conexion;
    private PreparedStatement statement = null;
    private ResultSet result = null;
    
    public AlumnoController(){
        this.tablaALumno = new Alumno[100];
        this.indiceArray=0;
    }
    
     public void guardarAlumno(Alumno alumno){
        this.tablaALumno[this.indiceArray]=alumno;  
        this.indiceArray=this.indiceArray+1;
        // procedimiento para almacenar en la Base de Datos
    }
    
    public Alumno[] getAlumnos(){
        return this.tablaALumno;
    }
    
    public void abrirConexion(){
<<<<<<< HEAD
        //conectorBD= new ConexionBaseDeDatos();
        //conexion=conectorBD.conectar();
=======
       conectorBD= new ConexionBaseDeDatos();
       conexion=conectorBD.conectar(); 
>>>>>>> master
    }
    public boolean guardarAlumno2(Alumno alumno){        
        String sql = "INSERT INTO Systemae.alumno(idAlumno, Profesor, seccion, codigo, correo, direccion ) "; //las tabla del sql
             sql += " VALUES( ?,?,?,?,?,?)"; 
        try{
            abrirConexion();
            statement = conexion.prepareStatement(sql); 
            statement.setString(1, alumno.getNombre());
            statement.setString(2, alumno.getProfesor());
            statement.setString(3, alumno.getSeccion());
	    statement.setInt(4, alumno.getCodigo());
	    statement.setString(5, alumno.getCorreo());
	    statement.setString(6, alumno.getDireccion());
             int resultado = statement.executeUpdate(); 
                if(resultado > 0){
                    return true;
                }else{
                    return false;
                }
        }catch(SQLException e){
            String error = e.getMessage();  
            return false;
        }    
    }

 public void getAlumnos2(StringBuffer respuesta){   
        String sql="select * from systemae.alumno";
        try{
        abrirConexion();
        respuesta.setLength(0);
        
        statement= conexion.prepareStatement(sql);                        
        result = statement.executeQuery();            
            if (result!=null){
                while (result.next()){
                respuesta.append("<tr>");
                respuesta.append("<td >").append(result.getString("idAlumno")).append("</td>");
                respuesta.append("<td >").append(result.getString("Profesor")).append("</td>");
                respuesta.append("<td >").append(result.getString("seccion")).append("</td>");
                respuesta.append("<td >").append(result.getString("nivel")).append("</td>");
	  	    respuesta.append("<td >").append(result.getString("codigo")).append("</td>");
		    respuesta.append("<td >").append(result.getString("correo")).append("</td>");
                respuesta.append("<td id=\"").append(result.getString("direccion"))
                        .append("\"  onclick=\"eliminarAlumno(this.id);\">") 
                        //.append("\"  onclick=\"eliminarAlumno("+result.getString("numero_carne")+");\">") 
                        .append(" <a class=\"btn btn-warning\"'><i class=\"fas fa-edit\"></i>  </a>"
                                +" <a class=\"btn btn-danger\"'> <i class=\"fas fa-trash-alt\"></i> </a>"
                                + " <td></tr>");
                }
            }else{
                respuesta.append("error al consultar");
            }
        }
        catch(SQLException ex){
            ex.printStackTrace();
        }
    }
}