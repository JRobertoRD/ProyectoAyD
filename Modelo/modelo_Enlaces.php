<?php

class EnlacesPaginas{

    public function enlacesPaginasModel($enlacesModelo){
        
        if($enlacesModelo == "RegistrarUsuario" ||
           $enlacesModelo == "RegistrarCliente" ||
           $enlacesModelo == "RegistrarProveedor" ||
           $enlacesModelo == "usuarioIniciarSecion" ||
           $enlacesModelo == "inventario"){

            $modulo = "Vista/Modulos/".$enlacesModelo.".php";

        }else if($enlacesModelo == "index.php"){

            $modulo = "Vista/Modulos/inicio.php";

        }else{

            $modulo = "Vista/Modulos/inicio.php";

        }

        return $modulo;
    }
}

?>