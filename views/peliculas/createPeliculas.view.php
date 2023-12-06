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
                    <h3 class="mb-0">Crear Pelicula</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
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

            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" method="POST" novalidate>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <label for="nombre" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" required>

                                </div>
                                <div class="col-md-3">
                                    <label for="apellidos" class="form-label">Descripción</label>
                                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>

                                </div>
                            </div>
                            <!-- Direccion 2 -->
                            <div class="col-md-3">
                                <label for="direccion2" class="form-label">Duración</label>
                                <input type="text" class="form-control" id="duracion" name="duracion" required>
                            </div>
                            <div class="col-md-3">
                                <label for="apellidos" class="form-label">Año Lanzamiento</label>
                                <input type="text" class="form-control" id="descripcion" name="anyo_lanzamiento" required>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Direccion 2 -->
                            <div class="col-md-3">
                                <label for="" class="form-label">Idioma</label>
                                <select class="form-select" id="" name="id_idioma" required>
                                    <?php foreach ($idiomas as $idioma) : ?>
                                        <option value="<?= $idioma->id_idioma ?>"><?= $idioma->nombre ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- Email -->
                            <div class="col-md-3">
                                <label for="email" class="form-label">Idioma Original</label>
                                <select class="form-select" id="" name="id_idioma_original" required>
                                    <?php foreach ($idiomas as $idioma) : ?>
                                        <option value="<?= $idioma->id_idioma ?>"><?= $idioma->nombre ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- Direccion 2 -->
                            <div class="col-md-3">
                                <label for="direccion2" class="form-label">Duración Alquiler</label>
                                <input type="text" class="form-control" id="duracion_alquiler" name="duracion_alquiler" required>
                            </div>
                            <!-- Direccion -->
                            <div class="col-md-3">
                                <label for="direccion" class="form-label">Rate</label>
                                <input type="text" class="form-control" id="rate" name="rental_rate" required>
                            </div>
                            <div class="row">
                                <!-- Direccion 2 -->
                                <div class="col-md-3">
                                    <label for="" class="form-label">Costo</label>
                                    <input type="text" class="form-control" id="costo" name="costo" required>
                                </div>
                                <!-- Direccion 2 -->
                                <div class="col-md-3">
                                    <label for="" class="form-label">Clasificación</label>
                                    <select class="form-select" id="" name="clasificacion" required>
                                        <option value="" hidden></option>
                                        <option value="G">G</option>
                                        <option value="PG">PG</option>
                                        <option value="R">R</option>
                                        <option value="NC-17">NC-17</option>
                                    </select>
                                </div>
                                <!-- Direccion 2 -->
                                <div class="col-md-3">
                                    <label for="direccion2" class="form-label">Caracteristicas Especiales</label>
                                    <input type="text" class="form-control" id="caracteristicas_especiales" name="caracteristicas_especiales" required>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <button name="submit" class="btn btn-primary" type="submit">Aceptar</button>
                                        <a href="../inventario/createInventario.php" class="btn btn-success">Crear Inventario</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>

<?php require_once '../../layouts/footerview.php'; ?>