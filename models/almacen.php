<?php

require_once '../../models/Conexion.php';
require_once '../../models/peliculas.php';

class Almacen extends Conexion{

    public $id_almacen;
    public $id_empleado_jefe;
    public $id_direccion;

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM almacen WHERE id_almacen = 1 ORDER BY id_almacen");
        $pre->execute();
        $res = $pre->get_result();

        $almacenes = array();
        while ($almacen = $res->fetch_object(Almacen::class)) {
            array_push($almacenes, $almacen);
        }

        return $almacenes;
    }
}