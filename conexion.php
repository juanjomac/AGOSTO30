<?php
  $servidor="localhost";
  $usuario="root";
  $password="";
  $baseDatos="productos";

  $conexion=mysqli_connect($servidor, $usuario, $password, $baseDatos)
    or die("No se conecto");

    $sql="select nombre from tipo";

    $resultado=mysqli_query($conexion, $sql);
    $i=0;

    while($row=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
      $vectorTipos[$i]=$row['nombre'];
      $i++;
    }

  /*  foreach ($vectorTipos as $valor) {
      echo $valor." <br />";
    }*/

 ?>
