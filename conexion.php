<?php
$usuario="root";
$passw="";
$db="INTEGRADORA";
$host="127.0.0.1";
$cone=mysqli_connect($host,$usuario,$passw,$db);
if($cone)
{echo"conexion exitosa";}
else{"conexion fallida";}
?>