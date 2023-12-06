<?php

require_once __DIR__ . '/../models/Conexion.php';

class Pelicula extends Conexion{

    public $titulo;
    public $descripcion;
    public $anyo_lanzamiento;
    public $id_idioma;
    public $id_idioma_original;
    public $duracion_alquiler;
    public $rental_rate;
    public $duracion;
    public $replacement_cost;
    public $clasificacion;
    public $caracteristicas_especiales;
    public $ultima_actualizacion;

    public static function all()
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM pelicula");
        $pre->execute();
        $res = $pre->get_result();

        $peliculas = array();
        while ($pelicula = $res->fetch_object(Pelicula::class)) {
            array_push($peliculas, $pelicula);
        }

        return $pelicula;
    }

    public function create()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO pelicula (titulo, descripcion, anyo_lanzamiento, id_idioma, id_idioma_original, duracion_alquiler, rental_rate, duracion, replacement_cost, clasificacion, caracteristicas_especiales) VALUES (?, ?, ?, ?, ?, ?, ? ,? ,? ,?, ?)");
        $pre->bind_param("sssssssssss", $this->titulo, $this->descripcion, $this->anyo_lanzamiento, $this->id_idioma, $this->id_idioma_original, $this->duracion_alquiler, $this->rental_rate, $this->duracion, $this->replacement_cost, $this->clasificacion, $this->caracteristicas_especiales);
        $pre->execute();
    }
    
    public function update()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE pelicula SET id_pelicula = ?, titulo = ?, descripcion = ?, anyo_lanzamiento = ?, id_idioma = ?, id_idioma_original = ?, duracion_alquiler = ?, rental_rate = ?, duracion = ?, replacement_cost = ?, clasificacion = ?, caracteristicas_especiales = ?, ultima_actualizacion = ? WHERE id = ?");
        $pre->bind_param("sssssssssssss", $this->id_pelicula, $this->titulo, $this->descripcion, $this->anyo_lanzamiento, $this->id_idioma, $this->id_idioma_original, $this->duracion_alquiler, $this->rental_rate, $this->duracion, $this->replacement_cost, $this->clasificacion, $this->username, $this->caracteristicas_especiales, $this->ultima_actualizacion);
        $pre->execute();
    }

    public function delete()
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM pelicula WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public static function getById($id)
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM pelicula WHERE id_pelicula = ?");
        $pre->bind_param("i", $id);
        $pre->execute();
        $res = $pre->get_result();

        $pelicula = $res->fetch_object(Pelicula::class);

        return $pelicula;
    }

}