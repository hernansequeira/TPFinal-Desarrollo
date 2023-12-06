<?php

include_once  '../../models/clientes.php';
include_once  '../../models/empleados.php';
include_once  '../../models/alquiler.php';
include_once  '../../models/inventario.php';
include_once  '../../models/peliculas.php';
include_once  '../../models/almacen.php';


$clientes = Cliente::all();
$empleados = Empleado::all();
$inventarios = Inventario::all(); 
$almacenes = Almacen::all(); 

if (isset($_POST['submit'])) {
   
    $detalles = $_POST['item'];


    for($i=0; $i<count($detalles['code']); $i++){

        $alquiler = new Alquiler;
        $alquiler->$fecha_alquiler = $detalles['fechaalquiler'][$i];
        $alquiler->$id_inventario = $detalles['code'][$i];
        $alquiler->$fecha_devolucion = $detalles['fechadevolucion'][$i];
        $alquiler->$id_cliente = $_POST['id_cliente'];
        $alquiler->$id_empleado = $_POST['id_empleado'];

        $alquiler->create();
    }
}









//Load view
include_once '../../views/inventario/createInventario.view.php';