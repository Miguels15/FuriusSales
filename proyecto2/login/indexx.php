<?php
  $servidor="localhost";
  $usuario="root";
  $clave="";
  $baseDeDatos="basedatos1";

  $enlace = mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
  if (!$enlace) {
  	echo "Error en la conexión con el servidor";
  }

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilophpe.css">
	<link rel="icon" type="ima/jpeg" href="ima/logitoba.jpeg">
	<a href="index.html"><img class="ima" src="ima/inicio.png"></a>
	<meta charset="utf-8">
    <link rel="icon" type="ima/jpg" href=imagenes/logobanner.jpg>
	<title>Registro</title>


</head>
<body>
	<form action="#" class="formulariox" id="formulario" name="formulario" method="POST">
	 <div class="registro" style="height: 770px">
		<h3>Registrate</h3>
		<label>Digite su correo electrónico</label>
		<input class="correoregistro" type="text" name="correo" id="correo" placeholder="Ejemplo1@mls.com" required="">
		<br>
		<label>Nombre</label><br>
		<input class="usuarioregistro" type="text" name="nombre" id="nombre" placeholder="jUan ss" required="">
		<br>
		<label for="contraseña">Digite su contraseña</label>
		<br>
		<input class="contraregistro" type="text" name="contraseña" id="contraseña" placeholder="* * * * * * * *" required="">
		




		<br>
		<label for="contraseña2">Confirme su contraseña</label>
		<br>
		<input class="contraregistro" type="text" name="contraseña2" id="contraseña2" placeholder="* * * * * * * *" required="">
		<br>




		<label>Digite su nombre de usuario</label>
		<br>
		<input class="usuarioregistro" type="text" name="usuario" id="usuario" placeholder="Ej. Oscar34" required="">
		<br>
		<label>Seleccione su sexo</label>
		<br>
		<select class="sexo" name="sexo" required="">
			<option value="Masculino">Masculino</option>
			<option value="Femenino">Femenino</option>
		</select>
			<p class="regis2">
			<input type="submit" name="Registrarme" class="input1" value="Registrarme"></p>
	 </div>
	</form>
	<p class="autor2">
	© NETSHOP<BR>
	© Miguel Sánchez Menjívar</p>

</body>
</html>

<?php
  if (isset($_POST["Registrarme"])) {
  	$nombre =$_POST["nombre"];
  	$correo =$_POST["correo"];
  	$contraseña =$_POST["contraseña"];
  	$sexo =$_POST["sexo"];
  	$usuario =$_POST["usuario"];
  	$contraseña2 =$_POST["contraseña2"];
  	$id = rand(1,99);

  	$insertarDatos = "INSERT INTO form VALUES('$correo',
                                              '$nombre',
                                              '$contraseña',
                                              '$sexo',
                                              '$usuario',
                                              '$id',
                                              '$contraseña2')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    if (!$ejecutarInsertar) {
    	echo "Error en la linea sql";
    }
  }


?>

<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php

  if($contraseña == $contraseña2){
  	echo "";
}

else{
	if ($contraseña !== $contraseña2) {
		echo '<script language="javascript">alert("Contraseña incorrecta");</script>';
		return false;
	}
}

?>

