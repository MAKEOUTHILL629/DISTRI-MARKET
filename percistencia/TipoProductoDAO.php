<?php

class TipoProductoDAO{
    private $id;
    private $nombre;



    public function TipoProductoDAO($id = "", $nombre=""){
        $this->id = $id;
        $this->nombre = $nombre;

    }

    public function consultarTodos(){
        return "SELECT idtipoproducto, nombre FROM tipoproducto ORDER BY nombre ASC";
    }

}