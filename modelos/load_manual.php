<?php

/**
 * INSTANCIA DE CONEXION
 */
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'gxdeve_apps';
$port = '3306';

//CREAE CONNECTION
$conexion = mysqli_connect($server, $user, $password, $db, $port);

//CHECK CONEXION
if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
} else {
    //  echo '<script>alert("Conexion Exitosa!")</script>';
}


/**CREATION SENTENCIAS */
if (!empty($_POST['carga'])) {

    if (
        !empty($_POST['CLIENT']) and !empty($_POST['RIF']) and !empty($_POST['SERI']) and !empty($_POST['MODEL']) and !empty($_POST['LOCATION'])
        and !empty($_POST['DATE']) and !empty($_POST['CONT_ANTE_BN']) and !empty($_POST['CONT_ACTU_BN']) and !empty($_POST['VOLUM_BN'])
        and !empty($_POST['CONT_ANTE_COLOR']) and !empty($_POST['CONT_ACTU_COLOR']) and !empty($_POST['VOLUM_COLOR'])
    ) {

        /**VAR */
        $CLIENT = $_POST['CLIENT'];
        $RIF = $_POST['RIF'];
        $SERI = $_POST['SERI'];
        $MODEL = $_POST['MODEL'];
        $LOCATION = $_POST['LOCATION'];
        $DATE = $_POST['DATE'];
        $CONT_ANTE_BN = $_POST['CONT_ANTE_BN'];
        $CONT_ACTU_BN = $_POST['CONT_ACTU_BN'];
        $VOLUM_BN = $_POST['VOLUM_BN'];
        $CONT_ANTE_COLOR = $_POST['CONT_ANTE_COLOR'];
        $CONT_ACTU_COLOR = $_POST['CONT_ACTU_COLOR'];
        $VOLUM_COLOR = $_POST['VOLUM_COLOR'];


        $query_load = $conexion->query(" INSERT INTO load_reading (CLIENT,RIF,SERI,MODEL,LOCATION,DATE,CONT_ANTE_BN, CONT_ACTU_BN, VOLUM_BN, 
        CONT_ANTE_COLOR, CONT_ACTU_COLOR, VOLUM_COLOR)VALUES('$CLIENT','$RIF','$SERI','$MODEL','$LOCATION','$DATE','$CONT_ANTE_BN','$CONT_ACTU_BN', 
        '$VOLUM_BN','$CONT_ANTE_COLOR', '$CONT_ACTU_COLOR', '$VOLUM_COLOR') ");

        if ($query_load == 1) {
            echo '<script>alert("Su Registro fue Cargado con Exito!")</script>';
        } else {
            echo '<script>alert("Error de Conexion, Comuniquese con el Administrador de Sistema!")</script>';
        }

    } else {
        echo '<script>alert("Debe Asegurese de Llenar todos los Campos!")</script>';
    } ?>

    <script>
        //SECTION DROP CACHE
        history.replaceState(null, null, location.pathname);
    </script>

    <?php
}