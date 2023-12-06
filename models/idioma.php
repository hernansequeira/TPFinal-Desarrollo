<?php

require_once '../../models/Conexion.php';

class Idioma extends Conexion {
    
    public $id_idioma, $nombre, $ultima_actualizacion;
    
    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM idioma");
        $pre->execute();
        $res = $pre->get_result();

        $idiomas = array();
        while ($idioma = $res->fetch_object(Idioma::class)) {
            array_push($idiomas, $idioma);
        }

        return $idiomas;
    }
}