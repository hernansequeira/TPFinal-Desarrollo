<?php

$id = $_GET['idcliente'];

require_once '../../models/Cliente.php';

try {
    // Validar el parámetro idcliente
    if (!isset($_GET['idcliente']) || !is_numeric($_GET['idcliente'])) {
        throw new Exception("ID de cliente no válido");
    }

    $id = $_GET['idcliente'];

    // Crear una instancia de la clase Cliente
    $conexion = new Conexion();
    $conexion->conectar();

    // Verificar la conexión a la base de datos
    if (!$conexion->con) {
        throw new Exception("Error en la conexión a la base de datos: " . mysqli_connect_error());
    }

    // Crear una instancia de la clase Cliente
    $cliente = new Cliente();

    // Validar la existencia del cliente
    if (!$cliente->get($id)) {
        echo "El cliente con ID $id no existe.";
    } else {
        // Intentar eliminar el cliente
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
