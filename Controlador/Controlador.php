<?php

class Controladora{

    #Llamada a plantilla
    public function plantilla(){

        include "Vista/plantilla.php";
    }

    #Interaccion del usuario
    public function enlacesPaginasController(){


        if(isset($_GET["action"])){
            $enlacesControlador = $_GET["action"];
        }else{
            $enlacesControlador = "index.php";
        }
        
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesControlador);
        
        include $respuesta;
    }
}


?>