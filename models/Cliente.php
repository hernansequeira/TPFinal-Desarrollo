<?php

require_once '../../models/Conexion.php';
require_once '../../models/direccion.php';

class Cliente extends Conexion {

    public $id_cliente, $id_almacen, $nombre, $apellidos, $email, $id_direccion, $activo, $fecha_creacion, $ultima_actualizacion;

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM cliente LIMIT 50");
        $pre->execute();
        $res = $pre->get_result();

        $clientes = array();
        while ($cliente = $res->fetch_object(Cliente::class)) {
            array_push($clientes, $cliente);
        }

        return $clientes;
    }

    public static function get($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM cliente WHERE id_cliente = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();
        $cliente = $res->fetch_object(Cliente::class);

        return $cliente;
    }

    public static function create($cliente)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "INSERT INTO cliente (id_almacen, nombre, apellidos, email, id_direccion, activo, fecha_creacion, ultima_actualizacion) VALUES (?, ?, ?, ?, ?, ?, now(), now())");
        $pre->bind_param("iissiii", $cliente->id_almacen, $cliente->nombre, $cliente->apellidos, $cliente->email, $cliente->id_direccion, $cliente->activo);
        $pre->execute();

        return mysqli_insert_id($conexion->con);
    }


    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE cliente SET id_almacen = ?, nombre = ?, apellidos = ?, email = ? WHERE id_cliente = ?");
        $pre->bind_param("isssi", $this->id_almacen, $this->nombre, $this->apellidos, $this->email, $this->id_cliente);
        $pre->execute();
    }


    public function delete($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "DELETE FROM cliente WHERE id_cliente = ?");
        $pre->bind_param("i", $id_cliente);
        $pre->execute();

        return mysqli_affected_rows($conexion->con);
    }


    public  function direccion()
    {
        return Direccion::GetById($this->id_direccion);
    }
}