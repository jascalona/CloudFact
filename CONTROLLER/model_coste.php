<?php


include('../CONTROLLER/conexion.php');

/**
 * Alamacen de datos /
 */
$query_coste = $conexion->query(" SELECT *FROM park WHERE RIF='J000340366' ");


if ($dt_coste = $query_coste->fetch_object()) {

    $COSTE["COSTE_DECLARADO_BN_BS"] = $dt_coste->COSTE_DECLARADO_BN_BS;
    $COSTE["COSTE_DECLARADO_BN_USD"] = $dt_coste->COSTE_DECLARADO_BN_USD;
    $COSTE["COSTE_DECLARADO_BS_COLOR"] = $dt_coste->COSTE_DECLARADO_BS_COLOR;
    $COSTE["COSTE_DECLARADO_USD_COLOR"] = $dt_coste->COSTE_DECLARADO_USD_COLOR;

}

//SAVE DATA



?>