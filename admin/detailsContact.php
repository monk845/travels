<?php
session_start();
require('../controllers/validaadmin.php');
require('../controllers/conexion.php');
require('../views/theme.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_update = " SELECT * FROM contacto WHERE idContacto = $id";

    $result = mysqli_query($conexion, $sql_update);
    $row = mysqli_fetch_array($result);
}
?>

<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <div class="card shadow">

                <div class="card-body p-6">

                    <div class="card-body mb-4">
                        <div class="text-center">
                            <img src="../img/img/douglas-bg.jpg" class="avatar avatar-xl mb-3" alt="">

                            <h4 class="mb-1"><?= $row['nombre'] ?> <?= $row['apellido'] ?></h4>
                            <p class="mb-0 fs-6"><i class="fe fe-map-pin me-1"></i><?= $row['pais'] ?></p>

                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Nombre</span>
                            <span class="text-dark"><?= $row['nombre'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Apellido</span>
                            <span class="text-dark"><?= $row['apellido'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Asunto</span>
                            <span class="text-dark"><?= $row['asunto'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Telfono</span>
                            <span class="text-dark"><?= $row['telefono'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Correo</span>
                            <span class="text-dark"><?= $row['correo'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Pais</span>
                            <span class="text-dark"><?= $row['pais'] ?></span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2 mt-4 fs-6">

                            <span>Fecha de contacto</span>
                            <span class="text-dark"><?= $row['fechaContacto'] ?></span>
                        </div><br>

                        <div class="mb-3">
                            <label class="form-label" for="mensaje">Mensaje</label>
                            <textarea class="form-control" id="mensaje" rows="5"><?= $row['mensaje'] ?></textarea>
                        </div>

                    </div>

                    <div class="d-grid gap-2">
                        <a href="../admin/tbcontact.php" class=" btn btn-warning" type="submit" value="detalles" name="details">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>