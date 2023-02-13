<!DOCTYPE html>
<html lang="es">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="wcodigoarticuloth=device-wcodigoarticuloth, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<?php
  include("conexion.php");
  $conexion=$base->query("SELECT * FROM productos");
  $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

  <table width="50%" border="0" align="center">
    <tr>
      <td class="primera_fila">CODIGOARTICULO</td>
      <td class="primera_fila">SECCION</td>
      <td class="primera_fila">NOMBREARTICULO</td>
      <td class="primera_fila">PRECIO</td>
      <td class="primera_fila">FECHA</td>
      <td class="primera_fila">IMPORTADO</td>
      <td class="primera_fila">PAISDEORIGEN</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>

      
    </tr> 
  
    <?php
      foreach($registros as $articulo):
    ?>

   	<tr>
      <td><?php echo $articulo->CODIGOARTICULO?> </td>
      <td><?php echo $articulo->SECCION?></td>
      <td><?php echo $articulo->NOMBREARTICULO?></td>
      <td><?php echo $articulo->PRECIO?></td>
      <td><?php echo $articulo->FECHA?></td>
      <td><?php echo $articulo->IMPORTADO?></td>
      <td><?php echo $articulo->PAISDEORIGEN?></td>
      <td class="bot"><a href="borrar.php?CODIGOARTICULO=<?php echo $articulo->CODIGOARTICULO?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

      <td class='bot'><a href="editarInicial.php?CODIGOARTICULO=<?php echo $articulo->CODIGOARTICULO?> & SECCION=<?php echo $articulo->SECCION?> & NOMBREARTICULO=<?php echo $articulo->NOMBREARTICULO?> & PRECIO=<?php echo $articulo->PRECIO?> & FECHA=<?php echo $articulo->FECHA?> & IMPORTADO=<?php echo $articulo->IMPORTADO?> & PAISDEORIGEN=<?php echo $articulo->PAISDEORIGEN?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>  
    
    <?php
      endforeach;
    ?>

	<tr>
      <form method="get" action="insertar.php">
        <td><input type='text' name='CODIGOARTICULO' size='10' class='centrado'></td>
        <td><input type='text' name='SECCION' size='10' class='centrado'></td>
        <td><input type='text' name='NOMBREARTICULO' size='10' class='centrado'></td>
        <td><input type='text' name='PRECIO' size='10' class='centrado'></td>
        <td><input type='text' name='FECHA' size='10' class='centrado'></td>
        <td><input type='text' name='IMPORTADO' size='10' class='centrado'></td>
        <td><input type='text' name='PAISDEORIGEN' size='10' class='centrado'></td>

        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
      </form>
  </table>

<p>&nbsp;</p>
</body>
</html>