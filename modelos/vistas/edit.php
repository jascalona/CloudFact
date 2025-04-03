<?php

$conexion = mysqli_connect('localhost', 'root', '', 'gxdeve_apps', '3306');

$id = $_GET['ID'];
$sql = $conexion->query(" SELECT *FROM m_user_lg WHERE id=$id ");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/x.png">
    <title>Edit</title>



    <!--CSS STYLES-->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/conf.css">
    <link rel="stylesheet" href="../CSS/responsive.css">
    <link rel="stylesheet" href="../CSS/FRAMEWORK/bootstrap.css">
    <!--CSS STYLES-->

    <!--BOX-ICONS-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--BOX-ICONS-->

    <!--FRAMEWORK BOOTSTRAP-->
    <script src="../JS/FRAMEWORK/bootstrap.js"></script>
    <script src="../JS/FRAMEWORK/jquery.js"></script>
    <script src="../JS/FRAMEWORK/bootstrap_ii.js"></script>
    <!--FRAMEWORK BOOTSTRAP-->

    <?php

    $conexion = mysqli_connect('localhost', 'root', '', 'gxdeve_apps', '3306');

    $ID = $_GET['ID'];
    $sql = $conexion->query(" SELECT *FROM park_sgd WHERE ID=$ID ");

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/x.png">
        <title>Edit</title>



        <!--CSS STYLES-->
        <link rel="stylesheet" href="../dist/css/edit_park.css">
        <link rel="stylesheet" href="../dist/css/loadManual.css">
        <link rel="stylesheet" href="../dist/css/Bootstrap.css">
        <!--CSS STYLES-->




        <!-- SCRIPT SEARCH-->
        <script src="../JS/search.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- SCRIPT SEARCH-->
    </head>

<body style="background: rgb(42, 43, 45);">


    <article class="card-install">
        <div class="item-install-right">
            <div class="cont-top">
                <h6>Edición de Registros</h6>
                <small>Aqui puedes editar los registros de equipos!</small>
            </div><br>
            <!--INPUT GROUP FORM-->

            <?php

        //    include "../CONTROLLER/modification_r.php";
            while ($datos = $sql->fetch_object()) { ?>

                <form action="" method="POST">


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Cliente</label>
                        <input name="CLIENT" type="text" class="form-control" id="exampleFormControlInput1" required
                            placeholder="Nombre del Cliente" value="<?= $datos->CLIENT ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">RIF</label>
                        <input name="RIF" type="text" class="form-control" id="exampleFormControlInput1" required
                            placeholder="RIF del Cliente" value="<?= $datos->RIF ?>" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Serial</label>
                        <input name="SERI" type="text" class="form-control" id="exampleFormControlInput1" required
                            placeholder="Serial del Equipo" value="<?= $datos->SERI ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Modelo</label>
                        <input name="MODEL" type="text" class="form-control" id="exampleFormControlInput1" required
                            placeholder="Modelo del Equipo" value="<?= $datos->MODEL ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Direccion Exacta</label>
                        <textarea name="LOCATION" class="form-control" id="exampleFormControlTextarea1" rows="3" required
                            placeholder="Ingrese Ubicacion del Equipo" value="<?= $datos->LOCATION ?>"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
                        <input name="CITY" type="text" class="form-control" id="exampleFormControlInput1" required
                            placeholder="Ciudad donde se Instalo el Equipo" value="<?= $datos->CITY ?>" >
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Fecha de Instalacion</label>
                        <input name="DATE" type="TEXtext" class="form-control" id="exampleFormControlInput1" 
                        value="<?= $datos->DATE_INSTA ?>" placeholder="Ingrese Fecha"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Modalidad de Intalación</label>
                        <select name="N_PORT" id="status" class="form-select form-select-lg mb-3" required
                            aria-label="Large select example">
                            <option></option>
                            <option value="USB">USB</option>
                            <option value="IPv4">IPv4</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Contador de Instalación B/N</label>
                        <input name="CONT_BN" type="text" class="form-control" id="exampleFormControlInput1" required
                            placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050" value="<?= $datos->CONT_INSTA_BN ?>">
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Contador de Instalación
                            Color</label>
                        <input name="CONT_COLOR" type="text" class="form-control" id="exampleFormControlInput1" required
                            placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050" value="<?= $datos->CONT_INSTA_COLOR ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Observaciones:</label>
                        <textarea name="OBSER" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Agrege un comentario (Opcional) " required value="<?= $datos->OBSER ?>" ></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Anexar Carta de Instalación</label>
                        <input name="DOC" type="file" class="form-control" id="exampleFormControlInput1"
                            placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050" value="<?= $datos->DOC ?>">
                    </div>


                    <?php
                    }
                    ?>

                <div class="btn-carga">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a
                            href="http://localhost/cloudfact/park.php">Volver</a></button>
                    <button type="submit" class="btn btn-dark" name="edit" value="submit">Cargar</button>
                </div>

            </form>


        </div>
    </article>


</body>

</html>