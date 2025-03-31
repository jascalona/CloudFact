<?php

include './CONTROLLER/conexion.php';

if (!empty($_POST['carga'])) {

    if (
        !empty($_POST['CLIENT']) and !empty($_POST['RIF']) and !empty($_POST['SERI']) and !empty($_POST['MODEL'])
        and !empty($_POST['LOCATION']) and !empty($_POST['CITY']) and !empty($_POST['DATE']) and !empty($_POST['N_PORT'])
        and !empty($_POST['CONT_BN']) and !empty($_POST['CONT_COLOR']) and !empty($_POST['OBSER']) and !empty($_POST['DOC'])
    ) {

        //SAVE VAR
        $CLIENT = $_POST['CLIENT'];
        $RIF = $_POST['RIF'];
        $SERI = $_POST['SERI'];
        $MODEL = $_POST['MODEL'];
        $LOCATION = $_POST['LOCATION'];
        $CITY = $_POST['CITY'];
        $DATE = $_POST['DATE'];
        $N_PORT = $_POST['N_PORT'];
        $CONT_BN = $_POST['CONT_BN'];
        $CONT_COLOR = $_POST['CONT_COLOR'];
        $OBSER = $_POST['OBSER'];
        $DOC = $_POST['DOC'];


        $query_install = $conexion->query(" INSERT INTO park_sgd (CLIENT,RIF,SERI,MODEL,LOCATION,CITY,DATE_INSTA,N_PORT,CONT_INSTA_BN, CONT_INSTA_COLOR, OBSER,DOC) 
        VALUES('$CLIENT','$RIF','$SERI','$MODEL','$LOCATION','$CITY','$DATE','$N_PORT','$CONT_BN','$CONT_COLOR','$OBSER','$DOC')  ");

        if ($query_install == 1) {
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
