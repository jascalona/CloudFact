<?php
session_start();

include './CONTROLLER/conexion.php';

if (!empty($_POST['btn'])) {

    if (!empty($_POST['user']) and !empty($_POST['password'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = $conexion->query(" SELECT *FROM usercloud WHERE email='$user' AND password='$password' ");
        
        /**SAVE DATA SECTION */

        if ($datos=$sql->fetch_object()) {
            $_SESSION['ci']= $datos->ci;
            $_SESSION["name"]= $datos->name;
            $_SESSION["name_two"]= $datos->name_two;
            $_SESSION["surname"]= $datos->surname;
            $_SESSION["surname_two"]= $datos->surname_two;
            $_SESSION["email"]= $datos->email;
            $_SESSION["roll"]= $datos->roll;
            $_SESSION["depart"]= $datos->depart;
            $_SESSION["n_movil"]= $datos->n_movil;
            $_SESSION["n_extension"]= $datos->n_extension;
            $_SESSION['geo']= $datos->geo;
            

            header("Location: ./dashboard.php");
        } else {
            echo '<script>alert("Acceso Denegado! Credenciales incorrectas, Verifique e intente de nuevo!")</script>';
        }

    } else {
        echo '<script>alert("Debe llenar todos los Campos!")</script>';

    }

}