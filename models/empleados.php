<?php

require_once __DIR__ . '/../models/Conexion.php';

class Empleado extends Conexion {

    public $id_empleado;
    public $nombre;
    public $apellidos;
    public $id_direccion;
    public $email;
    public $id_almacen;
    public $activo;
    public $username;
    public $ultima_actualizacion;

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO empleado (nombre, apellidos, id_direccion, email, id_almacen, username) VALUES (?, ?, ?, ?, ?, ?)");
        $pre->bind_param("ssssss", $this->nombre, $this->apellidos, $this->id_direccion, $this->email, $this->id_almacen, $this->username);
        $pre->execute();
    }
    
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE empleado SET nombre = ?, apellidos = ?, id_direccion = ?, email = ?, id_almacen = ?, username = ?, activo = ? WHERE id = ?");
        $pre->bind_param("ssssisi", $this->nombre, $this->apellidos, $this->id_direccion, $this->email, $this->id_almacen, $this->username, $this->activo);
        $pre->execute();
    }

    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM empleado WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM empleado");
        $pre->execute();
        $res = $pre->get_result();

        $empleados = array();
        while ($empleado = $res->fetch_object(Empleado::class)) {
            array_push($empleados, $empleado);
        }

        return $empleados;
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM empleado WHERE id = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $empleado = $res->fetch_object(Empleado::class);

        return $empleado;
    }

}