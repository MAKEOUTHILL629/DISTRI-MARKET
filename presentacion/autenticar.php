<?php

$correo = str_replace(" ", "#", $_POST["correo"]);

$clave = $_POST["clave"];

$administrado = new Administrador(0,"","",$correo, $clave);

if($administrado->autenticar()){
    $_SESSION["id"] = $administrado->getId();
    header("Location: index.php?pid=". base64_encode("presentacion/sesionAdministrador.php"));
}else{
    header("Location: index.php?error=1");

}

