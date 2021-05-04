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

        return "SELECT 	idadministrador  FROM administrador WHERE correo = '". $this->correo . "' AND clave='". md5($this->clave). "'";
    }

    public function consultar(){
        return "SELECT nombre, apellido, correo FROM administrador WHERE idadministrador={$this->id}";
    }


}