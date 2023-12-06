<?php
require_once '../../layouts/headerview.php';
?>

<!-- Begin: App Main -->
<main class="app-main">
    <!-- Begin: App Content Header -->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Crear Cliente</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <!-- Add breadcrumb items if needed -->
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- End: App Content Header -->

    <!-- Begin: App Content -->
    <div class="app-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" method="POST" novalidate>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="id_almacen" class="form-label">Almacen</label>
                                <select class="form-select" id="id_almacen" name="id_almacen" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="col-md-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-md-3">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>
                            <div class="col-md-3">
                                <label for="direccion2" class="form-label">Direccion 2</label>
                                <input type="text" class="form-control" id="direccion2" name="direccion2" required>
                            </div>
                            <div class="col-md-3">
                                <label for="distrito" class="form-label">Distrito</label>
                                <input type="text" class="form-control" id="distrito" name="distrito" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <label for="codigo_postal" class="form-label">Codigo Postal</label>
                                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
                            </div>
                            <div class="col-md-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                            </div>
                            <div class="col-md-6">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <select class="form-select" id="ciudad" name="ciudad" required>
                                    <?php foreach ($ciudades as $ciudad) : ?>
                                        <option value="<?= $ciudad->id ?>"><?= $ciudad->nombre ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-12">
                                <button name="submit" class="btn btn-primary" type="submit">Aceptar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End: App Content -->
</main>

<?php require_once '../../layouts/footerview.php'; ?>