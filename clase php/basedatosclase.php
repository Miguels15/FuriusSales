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
<?php
  if (isset($_POST["Enviar"])) {
    $nombre =$_POST["Nombre"];
    $correo =$_POST["Correo"];
    $mensaje =$_POST["Mensaje"];

    $insertarDatos = "INSERT INTO claseph VALUES('$Nombre',
                                                 '$Correo',
                                                 '$Mensaje')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);
    if (!$ejecutarInsertar) {
      echo "Error en la linea sql";
    }
  }
?>
