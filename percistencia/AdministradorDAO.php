<?php
class AdministradorDAO{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;





    public function AdministradorDAO($id=0, $nombre="", $apellido="", $correo="", $clave=""){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->clave = $clave;
    }

    public function autenticar(){
        return "SELECT idadministardor FROM administrador WHERE correo = '". $this->correo . "' AND clave='". md5($this->clave). "'";
    }


}