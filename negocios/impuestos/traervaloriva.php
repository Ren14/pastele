<?php

/*
 * (bars) sidebar_main.php -> (negocios/impuestos) 
 */
define("RUTA_ABS", dirname(__FILE__));
include_once (RUTA_ABS."/controlador/conexion.php");

$conexion = conectar_bd();

$query = "SELECT * FROM impuesto";

$result = mysql_query($query);

if (!$result) {
    echo "No pudo ejecutarse satisfactoriamente la consulta ($sql) " .
    "en la BD: " . mysql_error();
    //Finalizo la aplicación
    exit;
}

//----------------------------------------------------------------------------//



    while ($fila = mysql_fetch_assoc($result)) {

        echo '<option value=' . $fila['iva'] . '>' . $fila['iva'] . ' %</option>';
    }

?>