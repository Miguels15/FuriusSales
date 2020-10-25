<?php
 //variables de conexion con el servidor
  $servidor="localhost";
  $usuario="root";
  $clave="";
  $baseDeDatos="basedatos1";

  
 // conexion con el servidor, base de datos
  $enlace=mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
  if (!$enlace) {
  	echo "Error en la conexión con el servidor";
  }
  $correo=$_POST['correo'];
  $tab="SELECT * FROM form WHERE correo='$correo'";
  $enlace2=mysqli_query($enlace, $tab);
  $filas=mysqli_num_rows($enlace2);
  if ($filas>0) {
  	header("location:index.html");
  }else{
  	echo '<script language="javascript">alert("correo no encontrado");</script>';
  }
?>
