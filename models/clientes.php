<?php

require_once __DIR__ . '/../models/Conexion.php';

class Cliente extends Conexion {

    public $id_cliente;
    public $id_almacen;
    public $nombre;
    public $apellidos;
    public $email;
    public $id_direccion;
    public $activo;
    public $fecha_creacion;
    public $ultima_actualizacion;



 

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO cliente (id_almacen, nombre, apellidos, email, id_direccion, fecha_creacion) VALUES (?, ?, ?, ?, ?, ?)");
        $pre->bind_param("ssssss", $this->id_almacen, $this->nombre, $this->apellidos, $this->email, $this->id_direccion, $this->fecha_creacion);
        $pre->execute();
    }
    
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE cliente SET id_almacen = ?, nombre = ?, apellidos = ?, email = ?, id_direccion = ?, activo = ? WHERE id = ?");
        $pre->bind_param("issssi", $this->id_almacen, $this->nombre, $this->apellidos, $this->email, $this->id_direccion, $this->activo, );
        $pre->execute();
    }

    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM cliente WHERE id_cliente = ?");
        $pre->bind_param("i", $this->id_cliente);
        $pre->execute();
    }

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM cliente");
        $pre->execute();
        $res = $pre->get_result();

        $clientes = array();
        while ($cliente = $res->fetch_object(Cliente::class)) {
            array_push($clientes, $cliente);
        }

        return $clientes;
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM cliente WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $cliente = $res->fetch_object(Cliente::class);

        return $cliente;
    }

}