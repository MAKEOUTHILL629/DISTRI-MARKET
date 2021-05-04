<?php
session_start();
require_once "logica/Administrador.php";
require_once "logica/Marca.php";
require_once "logica/TipoProducto.php";
require_once "logica/Producto.php";
if(isset($_GET["sesion"]) && $_GET["sesion"] == "false"){
$_SESSION["id"]="";
}
$pid="";
if(isset($_GET["pid"])){
    $pid=base64_decode($_GET["pid"]) ;
}

$paginasSinSesion = [
        "presentacion/autenticar.php"

];

?>
<!doctype html>
<html lang="es" >
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="Shortcut Icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>

    <link rel="stylesheet" href="./css/style.css">
    <title>Distri Market</title>
</head>
<body>



<?php
if($pid != "" && (in_array($pid,$paginasSinSesion) || (isset($_SESSION["id"]) && $_SESSION["id"] != "") )    ){

    include $pid;
}else{
    include "presentacion/inicio.php";
}

?>


<footer class="text-gray-800 w-full  text-white    ">
    <div class="md:flex md:flex-row-reverse justify-around ">
        <div class="mt-4 ml-8">
            <div class="hover:text-blue-600"><i class="fa fa-facebook"></i> @distri-market </div>
            <div class="hover:text-blue-400"><i class="fa fa-twitter"></i> @distri-market </div>
            <div class="hover:text-orange-700"><i class="fa fa-instagram"></i> @distri-market </div>
        </div>
        <ul class="mt-4 mb-4 ml-8 md:list-disc">
            <li>Soporte</li>
            <li>Acerca de nosotros</li>
            <li>Registro</li>
            <li>Aviso Privacidad</li>
        </ul>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.7/dist/alpine.js" defer></script>
</body>
</html>
