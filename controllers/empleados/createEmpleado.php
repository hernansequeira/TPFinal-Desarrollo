<?php

include_once  '../../models/empleados.php';
include_once  '../../models/direccion.php';
include_once  '../../models/ciudad.php';

$ciudades = Ciudad::all();

if (isset($_POST['submit'])) {
    $id_almacen = $_POST['id_almacen'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $direccion = $_POST['direccion'];
    $direccion2 = $_POST['direccion2'];
    $distrito = $_POST['distrito'];
    $codigo_postal = $_POST['codigo_postal'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];

    $direccioncreada = new Direccion();
    $direccioncreada->direccion = $direccion;
    $direccioncreada->direccion2 = $direccion2;
    $direccioncreada->distrito = $distrito;
    $direccioncreada->id_ciudad = 300;
    $direccioncreada->codigo_postal = $codigo_postal;
    $direccioncreada->telefono = $telefono;
    $direccioncreada->create();

    $direccioncreada = Direccion::getLast();

    $empleado = new Empleado();
    $empleado->id_almacen = $id_almacen;
    $empleado->nombre = $nombre;
    $empleado->apellidos = $apellidos;
    $empleado->email = $email;
    $empleado->username = $username;
    $empleado->id_direccion = $direccioncreada->id_direccion;
    $empleado->create();
}

//Load view
include_once '../../views/empleados/createEmpleado.view.php';