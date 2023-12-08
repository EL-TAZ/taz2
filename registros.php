<?php

    include("conexion.php");
    $nom=$_POST['nusuario'];
    $ape=$_POST['ausuario'];
    $cor=$_POST['cusuario'];
    $con=$_POST['conusuario'];

    $sql = "insert into registro(nombre,apellido,correo,contraseña) values ('$nom','$ape','$cor','$con')";
    $result= mysqli_query($cone,$sql);
    if($result){
        echo "Registro creado exitosamente";
        
    }else{
        echo "Error en la conexion";
    }

    mysqli_close($cone);
?>