<?php

/*== Almacenando datos ==*/
$usuario = limpar_textos($_POST['login_usuario']);
$clave = limpar_textos($_POST['login_clave']);

/*== Verificando campos obligatorios ==*/
if ($usuario == "" || $clave == "") {
    echo '
            <div class="alert alert-danger d-flex align-items-center"         role="alert">
                <div>
                    <strong> <i class="bi bi-exclamation-triangle-fill"></i> ¡Ocurrio un error inesperado!</strong> <br>
                    No has llenado todos los campos que son obligatorios
                </div>
            </div>  
        ';
    exit();
}


/*== Verificando integridad de los datos ==*/
if (verificar_datos("[a-zA-Z0-9]{4,20}", $usuario)) {
    echo '

         <div class="alert alert-danger d-flex align-items-center"         role="alert">
                <div>
                    <strong> <i class="bi bi-exclamation-triangle-fill""></i> ¡Ocurrio un error inesperado!</strong> <br>
                    El USUARIO no coincide con el formato solicitado
                </div>
            </div> 
            
        ';
    exit();
}

if (verificar_datos("[a-zA-Z0-9$@.-]{7,100}", $clave)) {
    echo '
    
             <div class="alert alert-danger d-flex align-items-center"         role="alert">
                    <div>
                        <strong> <i class="bi bi-exclamation-triangle-fill""></i> ¡Ocurrio un error inesperado!</strong> <br>
                        La CLAVE no coincide con el formato solicitado
                    </div>
                </div> 
    
            ';
    exit();
}

$check_user = conexion();
$check_user = $check_user->query("SELECT * FROM usuario WHERE usuario_usuario='$usuario'");

if ($check_user->rowCount() == 1) {
    $check_user = $check_user->fetch();

    if ($check_user['usuario_usuario'] == $usuario && password_verify($clave, $check_user['usuario_clave'])) {

        $_SESSION['id']=$check_user['usuario_id'];
    		$_SESSION['nombre']=$check_user['usuario_nombre'];
    		$_SESSION['apellido']=$check_user['usuario_apellido'];
    		$_SESSION['usuario']=$check_user['usuario_usuario'];
        

        if(headers_sent()){
            echo "<script> window.location.href='index.php?vista=home'; </script> ";
        }else{
            header("Location: index.php?vista=home");
        }
        
        
    } else {

        echo '
    
             <div class="alert alert-danger d-flex align-items-center"         role="alert">
                    <div>
                        <strong> <i class="bi bi-exclamation-triangle-fill""></i> ¡Ocurrio un error inesperado!</strong> <br>
                        USUARIO o CLAVE incorrectos
                    </div>
                </div> 
    
            ';
    }
} else {
    echo '
    
             <div class="alert alert-danger d-flex align-items-center"         role="alert">
                    <div>
                        <strong> <i class="bi bi-exclamation-triangle-fill""></i> ¡Ocurrio un error inesperado!</strong> <br>
                        USUARIO o CLAVE incorrectos
                    </div>
                </div> 
    
            ';
}
$check_user = null;
