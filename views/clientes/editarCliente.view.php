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
                            <h3 class="mb-0">Clientes</h3>
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
                            <div class="col-md-6">
                                    <label for="id_almacen" class="form-label">Almacen</label>
                                    <select class="form-select" id="id_almacen" name="id_almacen" required>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" value="<?=$cliente->nombre?>" name="nombre" required>

                                </div>
                                <div class="col-md-3">
                                    <label for="apellidos" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidos" value="<?=$cliente->apellidos?>" name="apellidos" required>

                                </div>
                            </div>
                            <div class="row">
                                <!-- Email -->
                                <div class="col-md-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" value="<?=$cliente->email?>" name="email" required>


                                </div>
                                <!-- Direccion -->
                                <div class="col-md-3">
                                    <label for="direccion" class="form-label">Direccion</label>
                                    <input type="text" class="form-control" id="direccion" value="<?=$cliente->direccion()->direccion?>" name="direccion" required>

                                </div>
                            <div class="row">
                                <!-- Direccion 2 -->
                                <div class="col-md-3">
                                    <label for="direccion2" class="form-label">Direccion 2</label>
                                    <input type="text" class="form-control" id="direccion2" name="direccion2" required>


                                </div>
                                <!-- Distrito -->
                                <div class="col-md-3">
                                    <label for="distrito" class="form-label">Distrito</label>
                                    <input type="text" class="form-control" id="distrito" value="<?=$cliente->direccion()->distrito?>" name="distrito" required>

                                </div>
                            <div class="row">
                                <!-- Codigo postal -->
                                <div class="col-md-3">
                                    <label for="codigo_postal" class="form-label">Codigo Postal</label>
                                    <input type="text" class="form-control" id="codigo_postal" value="<?=$cliente->direccion()->codigo_postal?>" name="codigo_postal" required>


                                </div>
                                <!-- Telefono -->
                                <div class="col-md-3">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <input type="text" class="form-control" id="telefono" value="<?=$cliente->direccion()->telefono?>" name="telefono" required>

                                </div>
                                <!-- Ciudad -->
                                <div class="col-md-6">
                                    <label for="ciudad" class="form-label">Ciudad</label>
                                    <select class="form-select" id="" name="ciudad" required>
                                        <?php foreach ($ciudades as $ciudad) : ?>
                                            <?php if($ciudad->id_ciudad==$cliente->direccion()->id_ciudad){?>
                                            <option value="<?=$ciudad->id_ciudad?>" selected><?= $ciudad->nombre ?></option>
                                            <?php  }else { ?>

                                                <option value="<?=$ciudad->id_ciudad?>" ><?= $ciudad->nombre ?></option>

                                                <?php  } ?>
                                        <?php endforeach; ?>
                                    </select>
                            </div>
                            </div>

                                
                            </div>
                            <div class="row mt-2">
                                <div class="col-12">
                                    <button name="submit" class="btn btn-primary" type="submit">Editar</button>
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