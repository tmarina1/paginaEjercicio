<?php
  include("bd.php");
  
  if(isset($_POST['boton'])){
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $edad = trim($_POST['edad']);
    $consultar = "INSERT INTO usuario(nombre, apellido, edad) VALUES ('[$nombre]','[$apellido]','[$edad]')";
    $ingreso = mysqli_query($conexion, $consultar);

  header("Location: prueba.html");
  }
?>