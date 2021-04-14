<?php
class Conexion{
    private $mysqli;
    private $resultado;
    
    public function abrir(){
        $this -> mysqli = new mysqli("localhost", "root", "", "distri-market");
        //$this -> mysqli = new mysqli("localhost", "itiud_amazonas", "86Q2fyaICa", "itiud_amazonas");        
        $this -> mysqli -> set_charset("utf8");
    }

    function cerrar(){
        $this -> mysqli -> close();
    }
    
    function ejecutar($sentencia){
        $this -> resultado = $this -> mysqli -> query($sentencia);
    }
    
    function extraer(){
        return $this -> resultado -> fetch_row();
    }
    
    function numFilas(){
        return ($this -> resultado != null) ? $this -> resultado -> num_rows : 0; 
    }
}