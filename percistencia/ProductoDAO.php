<?php


class ProductoDAO
{
    private $id;
    private $nombre;
    private $precio;
    private $cantidad;
    private $imagen;
    private $administrador;
    private $marca;
    private $tipoProducto;


    /**
     * ProductoDAO constructor.
     * @param $id
     * @param $nombre
     * @param $precio
     * @param $cantidad
     * @param $imagen
     * @param $administrador
     * @param $marca
     * @param $tipoProducto
     */
    public function __construct($id="", $nombre="", $precio="", $cantidad="", $imagen="", $administrador="", $marca="", $tipoProducto="")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->imagen = $imagen;
        $this->administrador = $administrador;
        $this->marca = $marca;
        $this->tipoProducto = $tipoProducto;
    }

    public  function crear(){
        return "INSERT INTO producto (nombre, precio, cantidad, administrador_idadministrador, marca_idmarca, tipoproducto_idtipoproducto) 
                VALUES ('{$this->nombre}', '{$this->precio}', '{$this->cantidad}', '{$this->administrador}', '{$this->marca}', '{$this->tipoProducto}')";
    }


}