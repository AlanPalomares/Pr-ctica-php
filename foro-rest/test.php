<?php
require_once("connection.php");

$con = connection();
if($con)
   echo "Conexion exitosa";
else
  echo "Error en la conexion";