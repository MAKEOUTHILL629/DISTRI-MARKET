<?php
require_once "percistencia/Conexion.php";
require_once "percistencia/AdministradorDAO.php";
class Administrador{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $conexion;
    private $administradorDAO;

    /**
     * @return int|mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed|string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @return mixed|string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @return mixed|string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @return Conexion
     */
    public function getConexion()
    {
        return $this->conexion;
    }

    /**
     * @return AdministradorDAO
     */
    public function getAdministradorDAO()
    {
        return $this->administradorDAO;
    }



    public function Administrador($id=0, $nombre="", $apellido="", $correo="", $clave=""){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->clave = $clave;
        $this->conexion = new Conexion();
        $this->administradorDAO = new AdministradorDAO($this->id, $this->nombre, $this->apellido, $this->correo,$this->clave);
    }

    public function autenticar(){
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->administradorDAO->autenticar());
        if($this->conexion->numFilas()==0){
            return false;
        }else{
            $resultado = $this->conexion->extraer();
            $this->id = $resultado[0];
            return true;
        }

    }


}