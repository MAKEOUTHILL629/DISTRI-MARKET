<?php
class Conexion{
    private $mysql;
    private $resultado;

    funcion abrir(){
        $this -> mysql = new mysql("localhost", "root", "","")
    }
}