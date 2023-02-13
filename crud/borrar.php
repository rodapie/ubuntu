<?php

include("conexion.php");
$codigoarticulo = $_GET["CODIGOARTICULO"];
$base->query("DELETE FROM productos WHERE CODIGOARTICULO='$codigoarticulo'");
error_log("Error" . $codigoarticulo);
header("Location:indexInicial.php");
?>