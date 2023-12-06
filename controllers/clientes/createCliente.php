<?php

include_once  '../../models/clientes.php';
include_once  '../../models/direccion.php';
include_once  '../../models/ciudad.php';

$ciudades = Ciudad::all();

if (isset($_POST['submit'])) {
    $id_almacen = $_POST['id_almacen'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
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

    $cliente = new Cliente();
    $cliente->id_almacen = $id_almacen;
    $cliente->nombre = $nombre;
    $cliente->apellidos = $apellidos;
    $cliente->email = $email;
    $cliente->id_direccion = $direccioncreada->id_direccion;
    $cliente->create();
}

//Load view
include_once '../../views/clientes/createCliente.view.php';



