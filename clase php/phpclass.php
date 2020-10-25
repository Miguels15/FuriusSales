<?php
  $servidor="localhost";
  $usuario="root";
  $clave="";
  $baseDeDatos="clasephp";

  $enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
  if (!$enlace) {
  	echo "Error en la conexión con el servidor";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clase PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo1.css">
</head>
<body>
	<div class="form">
		<form action="#" method="POST">
			<p>Nombre:</p>
			<label for="nombre">Digite su nombre</label><br>
			<input type="text" id="Nombre" name="Nombre" placeholder="Nombre" required="">
			<p>Correo:</p>
			<label for="correo">Digite su correo</label><br>
			<input type="email" id="Correo" name="Correo" placeholder="ejemplo1@dominio.com" required="">
			<p>Mensaje:</p>
			<label for="mensaje">Digite su mensaje</label><br>
			<textarea id="Mensaje" name="Mensaje" placeholder="Digite aqui su mensaje =" required=""></textarea>
			<br>
			<br>
			<input type="submit" value="Enviar">
		</form>	
	</div>
</body>
</html>
<?php
  	$Nombre =$_POST["Nombre"];
  	$Correo =$_POST["Correo"];
  	$Mensaje =$_POST["Mensaje"];

  	$insertarDatos = "INSERT INTO claseph VALUES('$Nombre',
                                                 '$Correo',
                                                 '$Mensaje')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    if (!$ejecutarInsertar) {
    	echo "Error en la linea sql";
    }
?>