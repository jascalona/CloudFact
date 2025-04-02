<?php

    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=INFORME_ADMINISTRATIVO_DE_LECTURAS" .date('Y:m:d:m:s').".xls");

?>
 

<table style="border: solid 1px #000;">
    <tr>
        <th>Cliente</th>
        <th>RIF</th>
        <th>SERIAL</th>
        <th>MODELO</th>
        <th>Localidad</th>
        <th>Fecha</th>
        <th>Cont. Anterior B/N</th>
        <th>Cont. Actual B/N</th>
        <th>Volumen B/N</th>
        <th>Cont. Anterior Color</th>
        <th>Cont. Actual Color</th>
        <th>Volument Color</th>
    </tr>

<?php
    /**CONEXION Y DECLARACION DE DATOS POR COLUMNAS */

    $conexion = mysqli_connect("localhost","root", "", "gxdeve_apps", "3306");
    $sql_export = "SELECT *FROM load_reading";
    $execute=mysqli_query($conexion, $sql_export);
    while ($fila=mysqli_fetch_array($execute)){
    
?>

        <tbody>
            <tr>
                <td><?php echo $fila['1']?></td>
                <td><?php echo $fila['2']?></td>
                <td><?php echo $fila['3']?></td>
                <td><?php echo $fila['4']?></td>
                <td><?php echo $fila['5']?></td>
                <td><?php echo $fila['6']?></td>
                <td><?php echo $fila['7']?></td>
                <td><?php echo $fila['8']?></td>
                <td><?php echo $fila['9']?></td>
                <td><?php echo $fila['13']?></td>
                <td><?php echo $fila['14']?></td>
                <td><?php echo $fila['15']?></td>
            </tr>
        </tbod>


<?php
}
?>


</table>