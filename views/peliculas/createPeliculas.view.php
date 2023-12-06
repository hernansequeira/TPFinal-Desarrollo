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
                    <h3 class="mb-0">Crear Película</h3>
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
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="col-md-6">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="duracion" class="form-label">Duración</label>
                                <input type="text" class="form-control" id="duracion" name="duracion" required>
                            </div>
                            <div class="col-md-6">
                                <label for="anyo_lanzamiento" class="form-label">Año Lanzamiento</label>
                                <input type="text" class="form-control" id="anyo_lanzamiento" name="anyo_lanzamiento" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="id_idioma" class="form-label">Idioma</label>
                                <select class="form-select" id="id_idioma" name="id_idioma" required>
                                    <?php foreach ($idiomas as $idioma) : ?>
                                        <option value="<?= $idioma->id_idioma ?>"><?= $idioma->nombre ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="id_idioma_original" class="form-label">Idioma Original</label>
                                <select class="form-select" id="id_idioma_original" name="id_idioma_original" required>
                                    <?php foreach ($idiomas as $idioma) : ?>
                                        <option value="<?= $idioma->id_idioma ?>"><?= $idioma->nombre ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="duracion_alquiler" class="form-label">Duración Alquiler</label>
                                <input type="text" class="form-control" id="duracion_alquiler" name="duracion_alquiler" required>
                            </div>
                            <div class="col-md-6">
                                <label for="rental_rate" class="form-label">Rate</label>
                                <input type="text" class="form-control" id="rental_rate" name="rental_rate" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="costo" class="form-label">Costo</label>
                                <input type="text" class="form-control" id="costo" name="costo" required>
                            </div>
                            <div class="col-md-6">
                                <label for="clasificacion" class="form-label">Clasificación</label>
                                <select class="form-select" id="clasificacion" name="clasificacion" required>
                                    <option value="" hidden></option>
                                    <option value="G">G</option>
                                    <option value="PG">PG</option>
                                    <option value="R">R</option>
                                    <option value="NC-17">NC-17</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="caracteristicas_especiales" class="form-label">Características Especiales</label>
                                <input type="text" class="form-control" id="caracteristicas_especiales" name="caracteristicas_especiales" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <button name="submit" class="btn btn-primary" type="submit">Aceptar</button>
                                <a href="../inventario/createInventario.php" class="btn btn-success">Crear Inventario</a>
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
