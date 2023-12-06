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
                    <h3 class="mb-0">Crear Inventario</h3>
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
                                    <!-- Direccion 2 -->
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Id almacen</label>
                                        <select class="form-select" id="" name="id_almacen" required>
                                            <?php foreach ($almacenes as $almacen) : ?>
                                                <option value="<?= $almacen->id_almacen ?>"></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <br>
                                    <button name="submit" class="btn btn-primary" type="submit">Aceptar</button>
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