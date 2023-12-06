<?php


include_once  '../../models/peliculas.php';
include_once  '../../models/idioma.php';

$idiomas = Idioma::all();
$peliculas = Pelicula::all();

if (isset($_POST['submit'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $anyo_lanzamiento = $_POST['anyo_lanzamiento'];
    $id_idioma = $_POST['id_idioma'];
    $id_idioma_original = $_POST['id_idioma_original'];
    $duracion_alquiler = $_POST['duracion_alquiler'];
    $rental_rate = $_POST['rental_rate'];
    $duracion = $_POST['duracion'];
    $replacement_cost = $_POST['costo'];
    $clasificacion = $_POST['clasificacion'];
    $caracteristicas_especiales = $_POST['caracteristicas_especiales'];

    $peliculas = new Pelicula();
    $peliculas->titulo = $titulo;
    $peliculas->descripcion = $descripcion;
    $peliculas->anyo_lanzamiento = $anyo_lanzamiento;
    $peliculas->id_idioma = $id_idioma;
    $peliculas->duracion = $duracion;
    $peliculas->id_idioma_original = $id_idioma_original;
    $peliculas->replacement_cost = $replacement_cost;
    $peliculas->rental_rate = $rental_rate;
    $peliculas->duracion_alquiler = $duracion_alquiler;
    $peliculas->clasificacion = $clasificacion;
    $peliculas->caracteristicas_especiales = $caracteristicas_especiales;
    // var_dump($peliculas);
    $peliculas->create();
}

//Load view
include_once '../../views/peliculas/createPeliculas.view.php';