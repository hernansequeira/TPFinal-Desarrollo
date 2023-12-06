<?php

require_once __DIR__ . '/../models/Conexion.php';

class Alquiler extends Conexion {

    public $id_alquiler;
    public $fecha_alquiler;
    public $id_inventario;
    public $id_cliente;
    public $fecha_devolucion;
    public $id_empleado;
    public $ultima_actualizacion;



 

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO cliente (fecha_alquiler, id_inventario, id_cliente, fecha_devolucion, id_direccion, fecha_creacion) VALUES (?, ?, ?, ?, ?, ?)");
        $pre->bind_param("ssssss", $this->id_almacen, $this->nombre, $this->apellidos, $this->email, $this->id_direccion, $this->fecha_creacion);
        $pre->execute();
    }
}