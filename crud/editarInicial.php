<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

<?php

  include("conexion.php");

  $CODIGOARTICULO = $_GET["CODIGOARTICULO"];
  $SECCION = $_GET["SECCION"];
  $NOMBREARTICULO = $_GET["NOMBREARTICULO"];
  $PRECIO = $_GET["PRECIO"];
  $FECHA = $_GET["FECHA"];
  $IMPORTADO = $_GET["IMPORTADO"];
  $PAISDEORIGEN = $_GET["PAISDEORIGEN"];

?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="get" action="actualizar.php">
  <table width="25%" border="0" align="center">
    <tr>
      <td>CODIGO ARTICULO</td>
      <td><label for="CODIGOARTICULO"></label>
      <input type="text" name="CODIGOARTICULO" id="CODIGOARTICULO" value="<?php echo $CODIGOARTICULO?>"></td>
    </tr>
    <tr>
      <td>SECCIÓN</td>
      <td><label for="SECCION"></label>
      <input type="text" name="SECCION" id="SECCION" value="<?php echo $SECCION?>"></td>
    </tr>
    <tr>
      <td>NOMBRE ARTICULO</td>
      <td><label for="NOMBREARTICULO"></label>
      <input type="text" name="NOMBREARTICULO" id="NOMBREARTICULO" value="<?php echo $NOMBREARTICULO?>"></td>
    </tr>
    <tr>
      <td>PRECIO</td>
      <td><label for="PRECIO"></label>
      <input type="text" name="PRECIO" id="PRECIO" value="<?php echo $PRECIO?>"></td>
    </tr>
    <tr>
      <td>FECHA</td>
      <td><label for="FECHA"></label>
      <input type="text" name="FECHA" id="FECHA" value="<?php echo $FECHA?>"></td>
    </tr>
    <tr>
      <td>IMPORTADO</td>
      <td><label for="IMPORTADO"></label>
      <input type="text" name="IMPORTADO" id="IMPORTADO" value="<?php echo $IMPORTADO?>"></td>
    </tr>
    <tr>
      <td>PAIS DE ORIGEN</td>
      <td><label for="PAISDEORIGEN"></label>
      <input type="text" name="PAISDEORIGEN" id="PAISDEORIGEN" value="<?php echo $PAISDEORIGEN?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>