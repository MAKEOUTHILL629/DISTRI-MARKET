<?php
require_once  "percistencia/Conexion.php";
require_once "percistencia/TipoProductoDAO.php";
class TipoProducto{
    private $id;
    private $nombre;
    private $tipoProductoDAO;
    private $conexion;

    /**
     * @return mixed|string
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


    public function TipoProducto($id = "", $nombre=""){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->conexion = new Conexion();
        $this->tipoProductoDAO = new TipoProductoDAO();
    }

    public function consultarTodos(){
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->tipoProductoDAO->consultarTodos());
        $tipoProductos = array();
        while(($resultado = $this->conexion->extraer()) != null){
            array_push($tipoProductos, new TipoProducto($resultado[0], $resultado[1]));
        }
        $this->conexion->cerrar();
        return $tipoProductos;
    }


}