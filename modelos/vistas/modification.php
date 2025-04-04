<?php

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

if (!empty($_POST['edit'])) {

    if (
        !empty($_POST['CLIENT']) and !empty($_POST['RIF']) and !empty($_POST['SERI']) and !empty($_POST['MODEL']) and !empty($_POST['LOCATION'])
        and !empty($_POST['CITY']) and !empty($_POST['DATE_INSTA']) and !empty($_POST['N_PORT']) and !empty($_POST['CONT_BN']) and !empty($_POST['CONT_COLOR'])
        and !empty($_POST['OBSER']) and !empty($_POST['DOC'])
    ) {
    

    /**SAVE DATE VAR */
    $CLIENT = $_POST['CLIENT'];
    $RIF = $_POST['RIF'];
    $SERI = $_POST['SERI'];
    $MODEL = $_POST['MODEL'];
    $LOCATION = $_POST['LOCATION'];
    $CITY = $_POST['CITY'];
    $DATE_INSTA = $_POST['DATE_INSTA'];
    $N_PORT = $_POST['N_PORT'];
    $CONT_BN = $_POST['CONT_BN'];
    $CONT_COLOR = $_POST['CONT_COLOR'];
    $OBSER = $_POST['OBSER'];
    $DOC = $_POST['DOC'];

    /**QUERY FOR LOAD DATA VAR  */
    $query_edit = $conexion->query(" UPDATE park_sgd SET CLIENT='$CLIENT', RIF='$RIF', MODEL='$MODEL', LOCATION='$LOCATION', CITY='$CITY', DATE_INSTA='$DATE_INSTA',
    N_PORT='$N_PORT', CONT_INSTA_BN='$CONT_BN', CONT_INSTA_COLOR='$CONT_COLOR', DOC='$DOC' WHERE ID='$ID'  ");

    if ($query_edit == 1) {
        echo '<script>alert("Ha Ocurrido un Error de Conexion!")</script>';
        header('Location: http://localhost/cloudfact/park.php');
    } else {
        echo '<script>alert("Ha Ocurrido un Error de Conexion!")</script>';
    }

}
echo '<script>alert("Asegurece de llenar todos los Campos!!")</script>';

}



?>