<?php

include("conexion.php");
$CODIGOARTICULO=$_GET["CODIGOARTICULO"];
$SECCION=$_GET["SECCION"];
$NOMBREARTICULO=$_GET["NOMBREARTICULO"];
$PRECIO=$_GET["PRECIO"];
$FECHA=$_GET["FECHA"];
$IMPORTADO=$_GET["IMPORTADO"];
$PAISDEORIGEN=$_GET["PAISDEORIGEN"];




error_log("Error " . $CODIGOARTICULO . "   " . $SECCION . "   " . $NOMBREARTICULO . "   " . $PRECIO . "   " . $FECHA . "   " . $IMPORTADO . "  " . $PAISDEORIGEN);
$base->query("INSERT INTO productos (CODIGOARTICULO,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) VALUES ('$CODIGOARTICULO', '$SECCION', '$NOMBREARTICULO', '$PRECIO', '$FECHA', '$IMPORTADO', '$PAISDEORIGEN')");
header("Location:indexInicial.php");

?>