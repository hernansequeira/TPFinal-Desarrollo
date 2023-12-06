<?php

include_once  '../../models/peliculas.php';
include_once  '../../models/idioma.php';

$pelicula=Pelicula::get($id_pelicula);

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

    $idioma->update();

    $idioma = Idioma::GetById($id_idioma>$nombre);

    $idioma->id_idioma = $id_idioma;
    $idioma->nombre = $nombre;
    $idioma->ultima_actualizacion = $dultima_actualizacion;

    $idioma->update();
    
    $cliente->id_almacen = $id_almacen;
    $cliente->nombre = $nombre;
    $cliente->apellidos = $apellidos;
    $cliente->email = $email;
    // var_dump($cliente);
    $cliente->update();

    }

//Load view
include_once '../../views/peliculas/editarPeliculas.view.php';