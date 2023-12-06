<?php

$id = $_GET['idcliente'];

require_once '../../models/Cliente.php';

try {
    if (!isset($_GET['idcliente']) || !is_numeric($_GET['idcliente'])) {
        throw new Exception("ID de cliente no válido");
    }

    $id = $_GET['idcliente'];

    $cliente = new Cliente();

    $result = $cliente->delete($id);

    if ($result) {
        header("Location: ../clientes/index.php");
    } else {
        echo "No se ha podido eliminar el cliente.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
