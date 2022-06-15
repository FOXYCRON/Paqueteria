<html>
  <head>
	<meta charset = "utf-8"/>
    <title> Actualizar </title>
</head>
<body bgcolor = "white">

    <header>
        <h1 align = "center"> Actualizar </h1>
    </header>
    <nav>

    

          <br>

          <center>
			<center><h1>ACTUALIZAR</h1>
			<?php
	$conexion = mysqli_connect("localhost", "root", "irvinadrian5", "base1") or
	die("Problemas con la conexion.");
	
	mysqli_query($conexion, "update paqueteria
				set NumOrden='$_REQUEST[ordenNueva]'
				where NumOrden='$_REQUEST[ordenVieja]'") or
		die("Problemas en el select:" . mysqli_error($conexion));
	echo"El numero de orden fue modificado con exito";
	?>
	</center>
	
  </body>
</html>