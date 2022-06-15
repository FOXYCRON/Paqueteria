<!DOCTYPE html>
<html>
    <head>
        <title> Pedido </title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
<body bgcolor = "white">

    <header>
        <h1 align = "center"> Pedido </h1>
    </header>
    <nav>

          <br>

          <center>
      <?php
	$conexion = mysqli_connect("localhost", "root", "irvinadrian5", "base1") or
  die("Problemas con la conexion.");
  
      mysqli_query($conexion, "insert into paqueteria (NumOrden,Cliente,Pedido,Precio) values
                            ('$_REQUEST[numero]','$_REQUEST[nombre]','$_REQUEST[pedido]',$_REQUEST[precio])") 
        or die("Problemas en el select" . mysqli_error($conexion));

      mysqli_close($conexion);

      echo"El cliente fue dado de alta.";
?>
	</center>
    </body>
</html>