<?php
session_start();
require_once "logica/Administrador.php";
$pid="";
if(isset($_GET["pid"])){
    $pid=base64_decode($_GET["pid"]) ;
}

if($pid != ""){
    include $pid;
}else{
    include "presentacion/inicio.php";
}
