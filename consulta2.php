<html>
  <head>
	<meta charset = "utf-8"/>
    <title> Consulta </title>
	<link href="style-consulta.css" rel="stylesheet" type="text/css">
	 </head>
  <body>

   <center>
	<?php
	$conexion = mysqli_connect("localhost", "root", "irvinadrian5", "base1") or
	die("Problemas con la conexion.");
	
	$registros = mysqli_query($conexion, "select NumOrden, Cliente, Pedido, Precio
				from paqueteria where Cliente='$_REQUEST[Cliente]'") or
		die("Problemas en el select:" . mysqli_error($conexion));

	if ($reg = mysqli_fetch_array($registros)) {
		echo "<b> Numero de Orden: </b>" . $reg['NumOrden'] . "<br>";
		echo "<b> Nombre: </b>" . $reg['Cliente'] . "<br>";
		echo "<b> Pedido: </b>" . $reg['Pedido'] . "<br>";
		echo "<b> Precio: </b>" . $reg['Precio'] . "<br>";
		
	} else {
	echo"No existe una orden con ese nombre registrado.";
	}
	mysqli_close($conexion);

	?>
	</center>

  </body>
</html>