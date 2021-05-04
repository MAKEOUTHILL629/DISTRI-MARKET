<?php

class MarcaDAO{
    private $id;
    private $nombre;



    public function MarcaDAO($id = "", $nombre=""){
        $this->id = $id;
        $this->nombre = $nombre;

    }

    public function consultarTodos(){
        return "SELECT idmarca, nombre FROM marca ORDER BY nombre";
    }

}