<?php
require_once "percistencia/Conexion.php";
require_once "percistencia/ProductoDAO.php";

class Producto
{
    private $id;
    private $nombre;
    private $precio;
    private $cantidad;
    private $imagen;
    private $administrador;
    private $marca;
    private $tipoProducto;
    private $conexion;
    private $productoDAO;

    public function Producto($id="", $nombre="", $precio="", $cantidad="", $imagen="", $administrador="", $marca="", $tipoProducto=""){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->imagen = $imagen;
        $this->administrador = $administrador;
        $this->marca = $marca;
        $this->tipoProducto = $tipoProducto;
        $this->conexion = new Conexion();
        $this->productoDAO = new ProductoDAO($id, $nombre, $precio, $cantidad, $imagen, $administrador, $marca, $tipoProducto);

    }

    public function crear(){
        $this->conexion->abrir();
        $this->conexion->ejecutar($this->productoDAO->crear());
        $this->conexion->cerrar();
    }


}