<?php

$id = $_GET['idcliente'];

require_once '../../models/Cliente.php';

try {

    if (!isset($_GET['idcliente']) || !is_numeric($_GET['idcliente'])) {
        throw new Exception("ID de cliente no válido");
    }

    $id = $_GET['idcliente'];


    $conexion = new Conexion();
    $conexion->conectar();


    if (!$conexion->con) {
        throw new Exception("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }


    $cliente = new Cliente();


    if (!$cliente->get($id)) {
        echo "El cliente con ID $id no existe.";
    } else {

        $result = $cliente->delete($id);

        if ($result) {
            header("Location: ../clientes/index.php");
        } else {
            echo "No se ha podido eliminar el cliente.";
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
