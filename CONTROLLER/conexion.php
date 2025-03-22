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
} else{
      //  echo '<script>alert("Conexion Exitosa!")</script>';
}