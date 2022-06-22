
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Registrar usuario</title>

    <!--JQUERY-->

    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->

    
    <!-- Los iconos tipo Solid de Fontawesome-->


    <!-- Nuestro css-->


</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="Vista/img/avatar.png"/>
                </div>
                <form class="col-12" method="POST">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="nombreUsuario"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="contraseña"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Repetir contrasena" name="Vcontraseña"/>
                    </div>
                    <div class="form-group" id="correo-group">
                        <input type="text" class="form-control" placeholder="Correo"  name="correo"/>
                    </div>
                    <div class="form-group" id="telefono-group">
                        <input type="text" class="form-control" placeholder="Telefono" required pattern="[0-9]+" title = "Solo digite numeros" name="telefono"/>
                    </div>


                   
                <?php
                        
                        $registro = ControladorFormularios::registrarUsuario();
                        #echo $registro;
                        
                        if($registro == "ok"){
                            echo '<script>

                            if(window.history.replaceState){
                                window.history.replaceState(null,null,window.location.href);
                            }
                        
                            </script>';
                            
                            echo '<div class="alert alert-success">Registrado</div>';
                        }
                        

                    ?>
                    <button type="submit" name= "registrar" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Registrar </button>
                </form>
                <div style="text-align: right;">
                    <a href="index.php?action=usuarioIniciarSecion" class="btn btn-default">Login</a>
                </div>
            </div>
        </div>
    </div>


</body>
</html>


    
