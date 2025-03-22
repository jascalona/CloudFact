<?php
session_start();

include './CONTROLLER/conexion.php';

if (!empty($_POST['btn'])) {

    if (!empty($_POST['user']) and !empty($_POST['password'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = $conexion->query(" SELECT *FROM log_partner WHERE email='$user' AND password='$password' ");
        
        /**SAVE DATA SECTION */

        if ($datos=$sql->fetch_object()) {
            $_SESSION["name"]= $datos->name;
            $_SESSION["surname"]= $datos->surname;
            $_SESSION["email"]= $datos->email;
            $_SESSION["corporation"]= $datos->corporation;
            $_SESSION["roll"]= $datos->roll;

            header("Location: ./dashboard.php");
        } else {
            echo '<script>alert("Acceso Denegado! Credenciales incorrectas, Verifique e intente de nuevo!")</script>';
        }

    } else {
        echo '<script>alert("Debe llenar todos los Campos!")</script>';

    }

}