<?php

require_once '../../models/Conexion.php';
require_once '../../models/peliculas.php';

class Inventario extends Conexion{

    public $id_inventario;
    public $id_pelicula;
    public $id_almacen;

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM inventario WHERE id_almacen = 1 ORDER BY id_inventario");
        $pre->execute();
        $res = $pre->get_result();

        $inventarios = array();
        while ($inventario = $res->fetch_object(Inventario::class)) {
            array_push($inventarios, $inventario);
        }

        return $inventarios;
    }

    public function pelicula(){
        return Pelicula::getById($this->id_pelicula);
    }
}