<?php


require_once '../../models/Cliente.php';
require_once '../../models/ciudad.php';

$id_cliente=$_GET['idcliente'];
// echo $id_cliente;

$cliente=Cliente::get($id_cliente);
$ciudades=Ciudad::all();

// var_dump($cliente->direccion());



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

    $id_direccion=Direccion::GetById($cliente->id_direccion);

    $id_direccion->direccion = $direccion;
    $id_direccion->direccion2 = $direccion2;
    $id_direccion->distrito = $distrito;
    $id_direccion->id_ciudad = $ciudad;
    $id_direccion->codigo_postal = $codigo_postal;
    $id_direccion->telefono = $telefono;
    $id_direccion->update();

    
    $cliente->id_almacen = $id_almacen;
    $cliente->nombre = $nombre;
    $cliente->apellidos = $apellidos;
    $cliente->email = $email;
    // var_dump($cliente);
    $cliente->update();

    }


//Load view
include_once '../../views/clientes/editarCliente.view.php';