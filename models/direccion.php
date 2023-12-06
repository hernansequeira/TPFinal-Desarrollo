<?php

require_once '../../models/Conexion.php';

class Direccion extends Conexion{

    public $direccion;
    public $direccion2;
    public $distrito;
    public $codigo_postal;
    public $telefono;
    public $id_ciudad;

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM direccion");
        $pre->execute();
        $res = $pre->get_result();

        $direcciones = array();
        while ($direccion = $res->fetch_object(Direccion::class)) {
            array_push($direcciones, $direccion);
        }

        return $direccion;
    }

    
    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO direccion (direccion, direccion2, distrito, id_ciudad, codigo_postal, telefono) VALUES (?, ?, ?, ?, ?, ?)");
        $pre->bind_param("sssiss", $this->direccion, $this->direccion2, $this->distrito,$this->id_ciudad, $this->codigo_postal, $this->telefono);
        $pre->execute();
    }

    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE direccion SET direccion = ?, direccion2 = ?, distrito = ?, id_ciudad = ?, codigo_postal = ?, telefono = ? WHERE id_direccion = ?");
        $pre->bind_param("sssissi", $this->direccion, $this->direccion2, $this->distrito, $this->id_ciudad, $this->codigo_postal, $this->telefono, $this->id_direccion);
        $pre->execute();
    }


    public static function getLast()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM direccion ORDER BY id_direccion DESC LIMIT 1");
        $pre->execute();
        $res = $pre->get_result();

        $direccion = $res->fetch_object(Direccion::class);

        return $direccion;
    }

    public static function GetById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM direccion WHERE id_direccion = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();
        $direccion = $res->fetch_object(Direccion::class);

        return $direccion;
    }
}

