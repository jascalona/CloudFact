<?php

include 'conexion.php';
require('conexion.php');


$tipo       = $_FILES['dataCliente']['type'];
$tamanio    = $_FILES['dataCliente']['size'];
$archivotmp = $_FILES['dataCliente']['tmp_name'];
$lineas     = file($archivotmp);

$i = 0;

foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 0);

    if ($i != 0) {

        $datos = explode(",", $linea);
       
        $RIF                = !empty($datos[0])  ? ($datos[0]) : '';
		$CLIENT                = !empty($datos[1])  ? ($datos[1]) : '';
        $LOCATION               = !empty($datos[2])  ? ($datos[2]) : '';
        $MODEL               = !empty($datos[3])  ? ($datos[3]) : '';
        $SERI               = !empty($datos[4])  ? ($datos[4]) : '';
        $DATE               = !empty($datos[6])  ? ($datos[6]) : '';
        $VOLUM_BN            = !empty($datos[7])  ? ($datos[7]) : '';
        $VOLUM_COLOR            = !empty($datos[8])  ? ($datos[8]) : '';
        $CONT_ACTU_BN            = !empty($datos[12])  ? ($datos[12]) : '';
        $CONT_ACTU_COLOR            = !empty($datos[13])  ? ($datos[13]) : '';


       
    $insertar = "INSERT INTO load_reading( 
			RIF,
            CLIENT,
            LOCATION,
            MODEL,
            SERI,
            DATE,
            VOLUM_BN,
            VOLUM_COLOR,
            CONT_ACTU_BN,
            CONT_ACTU_COLOR
        ) VALUES(
        	'$RIF',
            '$CLIENT',
            '$LOCATION',
            '$MODEL',
            '$SERI',
            '$DATE',
            '$VOLUM_BN',
            '$VOLUM_COLOR',
            '$CONT_ACTU_BN',
            '$CONT_ACTU_COLOR'
        )";
        mysqli_query($conexion, $insertar);
    }

      echo '<div>'. $i. "). " .$linea.'</div>';
    $i++;
}


  echo '<p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p>';

?>

<a href="../Components/load_general.php">Atras</a>