<?php
require_once '../../layouts/headerview.php';

?>

        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Clientes</h3><br><td><a href="../../controllers/clientes/createCliente.php" class="btn btn-success">Crear nuevo cliente</a></td>
                            
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Clientes
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                </div>
            <html>
                <body>
    <div class="container">
        <table class="table table-striped">

            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Almacen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">ID Direccion</th>
                    <th scope="col">Activo</th>
                    <th scope="col">Fecha Creacion</th>
                    <th scope="col">Acción</th>
                    
                </tr>
            </thead>

            <tbody>
                <?php foreach ($clientes as $cliente) : ?>
                    <tr>
                        <td><?= $cliente->id_cliente ?></td>
                        <td><?= $cliente->id_almacen ?></td>
                        <td><?= $cliente->nombre ?></td>
                        <td><?= $cliente->apellidos ?></td>
                        <td><?= $cliente->email ?></td>
                        <td><?= $cliente->id_direccion ?></td>
                        <td><?= $cliente->activo ?></td>
                        <td><?= $cliente->fecha_creacion ?></td>
                        <td><a href="../../controllers/clientes/editarCliente.php?idcliente=<?= $cliente->id_cliente ?>  " class="btn btn-warning">Editar</a></td>
                        <td><a href="../../controllers/clientes/deleteCliente.php?idcliente=<?= $cliente->id_cliente ?>  " class="btn btn-danger">Eliminar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>
                <!--end::Container-->
            </div>
            <!--end::App Content-->
        </main>

<?php require_once '../../layouts/footerview.php'; ?>