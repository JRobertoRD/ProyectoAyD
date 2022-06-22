<?php

require_once "conexion.php";

class ModeloFormularios{


    static public function registroUsuario($tabla,$datos){

        #echo "Entra a registroUsuario de ModeloFormularios";
        #echo "<br>".$datos["nombreUsuario"]."<br>".$datos["contraseña"]."<br>".$datos["correo"]."<br>".$datos["telefono"];
        $nombreUsuario = $datos["nombreUsuario"];
        $contraseña = $datos["contraseña"];
        $correo = $datos["correo"];
        $telefono = $datos["telefono"];

        $insert = "INSERT INTO $tabla(nombreUsuario, contraseña, correo, telefono) 
                   VALUES ('$nombreUsuario', '$contraseña', '$correo', '$telefono')";
        
        $objPDO = Conexion::conectar();

        #$objPDO->exec($insert);

        if($objPDO->exec($insert) == true){
            return "ok";
        }else{
            echo "PETA";
            print_r(Conexion::conectar()->errorInfo());
        }
        
        
        /*$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombreUsuario, contraseña, correo, telefono) 
                                             VALUES (:nombreUsuario, :contraseña, :correo, :telefono)");

        
        $stmt->bindParam(":nombreUsuario",$datos["nombreUsuario"], PDO::PARAM_STR);
        $stmt->bindParam(":contraseña",$datos["contraseña"], PDO::PARAM_STR);
        $stmt->bindParam(":correo",$datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono",$datos["telefono"], PDO::PARAM_STR);


        if($stmt->execute()){
            return "ok";
        }else{
            echo "PETA";
            print_r(Conexion::conectar()->errorInfo());
        }
        */


    }

}


?>