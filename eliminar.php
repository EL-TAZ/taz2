<?php	 
$id=$_GET['ideliminar']; 
include("conexion.php");
$sql="DELETE FROM registro WHERE id ='".$id."'";
$result = mysqli_query($cone,$sql); if($result) {
echo "Registro eliminado exitosamente";
header('location:consulta.php');
}else{ echo "Error en la conexion";
}
mysqli_close($cone);
?>