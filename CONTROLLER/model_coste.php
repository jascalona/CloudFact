<?php


include('../CONTROLLER/conexion.php');

/**
 * Alamacen de datos /
 */
$query_coste = $conexion->query(" SELECT *FROM load_reading WHERE RIF='J000340366' ");


if ($dt_coste = $query_coste->fetch_object()) {
    //SAVE DATA
    $COSTE["PRECIO_CLICK_BS_BN"] = $dt_coste->PRECIO_CLICK_BS_BN;
    $COSTE["PRECI_CLICK_USD_BN"] = $dt_coste->PRECI_CLICK_USD_BN;
    $COSTE["PRECIO_CLICK_BS_COLOR"] = $dt_coste->PRECIO_CLICK_BS_COLOR;
    $COSTE["PRECIO_CLICK_USD_COLOR"] = $dt_coste->PRECIO_CLICK_USD_COLOR;

}

$cont_devices = mysqli_query($conexion, "SELECT *FROM load_reading WHERE RIF='J000340366' ");
$cont_row_device = mysqli_num_rows($cont_devices);




?>