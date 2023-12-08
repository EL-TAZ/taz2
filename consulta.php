<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<tr>
    <th>Id</th>
    <th>nombre</th>
    <th>Apellido</th>
    <th>Correo</th>
   </th>contraseña</th>
 
   

</tr>




<?php
include("conexion.php");
$acceso_db = mysqli_select_db($cone,$db); if($acceso_db){
echo "Acceso a la base de datos realizado exitosamente";} else{
echo "Error en el acceso a la base de datos";}

//Consulta 
$sql="SELECT*from registro";
//$sql="SELECT * FROM registro WHERE Nombre='Luz'";
$result=mysqli_query($cone,$sql);
 while($row=mysqli_fetch_array($result)){ 
    echo "<tr>";
echo "<td>".$row['id']."</td>";
 echo "<td>".$row['nombre']."</td>";
  echo "<td>".$row['apellido']."</td>";
 echo "<td>".$row['correo']."</td>";
echo "<td> <a href='editar.php?ideditar=".$row['id']."'>Editar</a>"."-";	
echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='eliminar.php?ideliminar=".$row['id']."'>Eliminar</a> </td>";
"</tr>";}
$cone->close();
?>
</table>
</body>
</html>