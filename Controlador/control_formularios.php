<?php


class ControladorFormularios{



    static public function registrarUsuario(){
        #echo "Entra a registrarUsuario de ControladorFormularios";

       #echo $_POST["nombreUsuario"];
        if(isset($_POST["nombreUsuario"])){
            #echo "Entra a if de registrarUsuario de ControladorFormularios";
            $tabla = "usuario";
            $datos = array("nombreUsuario" => $_POST["nombreUsuario"],
                            "contraseña" => $_POST["contraseña"],
                            "correo" => $_POST["correo"],
                            "telefono" => $_POST["telefono"]);
            
            #echo "<br>".$datos["nombreUsuario"]."<br>".$datos["contraseña"]."<br>".$datos["correo"]."<br>".$datos["telefono"]."<br>";

            $respuesta = ModeloFormularios::registroUsuario($tabla,$datos);
            return $respuesta;
        }
    }
}

?>