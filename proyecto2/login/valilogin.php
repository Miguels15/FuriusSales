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




 //variables mias y codigo para mi validacion
  $usuario=$_POST['usuario'];
  $contraseña=$_POST['contraseña'];

  $consul="SELECT * FROM form WHERE usuario='$usuario' AND contraseña='$contraseña'";
  if (!$consul) {
  	echo "hay un error en la seleccion";
    }
  $resultado=mysqli_query($enlace, $consul);
  $filas=mysqli_num_rows($resultado);

  if ($filas>0){
  	header("location:index.html");
  }
  else{
    ?>
    <?php
    include("login.html");
    ?>
    <div class="divphp">
      <h1 class="CreError">Credenciales Incorrectas</h1>
    </div>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&display=swap');
      .divphp {
        border-radius: 8px;
        font-size:10px;
        height:30px;
        width:300px;
        margin:-470px  auto;
        background-color:#D98880;
        font-family: 'Baloo Tammudu 2', cursive;
        padding-top: 0px;
}
    </style>
    <?php
  }
  mysqli_free_result($resultado);
  mysqli_close($enlace);
?>