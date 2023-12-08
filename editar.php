<?php echo "<a href='formulario.php'>Registro</a>"; echo "<a href='consulta.php'>Consulta</a>";
//llamar archivo conexion.php 
include("conexion.php");
$id=@$_GET['ideditar'];
$sql="SELECT * FROM registro WHERE id='$id'";
$result = mysqli_query($cone,$sql);
$row=mysqli_fetch_assoc($result);
$NOMBRE=$row['nombre'];
$APELLIDO=$row['apellido'];
$CORREO=$row['correo'];
 $CONTRASEÑA=$row['contraseña'];
if(isset($_POST['update'])){
$nombreNUEVO=$_POST['nusuarionuevo'];
$apellidoNUEVO=$_POST['ausuarionuevo'];
$correoNUEVO=$_POST['cusuarionuevo'];
$contaseñaNUEVO=$_POST['conusuarionuevo'];
$sql = "UPDATE registro SET nombre='$nombreNUEVO', apellido='$apellidoNUEVO',correo='$correoNUEVO', contraseña='$contraseñaNUEVO' WHERE id='$id'";//comillasmen id
$result = mysqli_query($cone,$sql);
if($result){
mysqli_close($cone);
echo "Registro actualizado exitosamente"; header('location:consulta.php');
}else{ echo "Error en la conexion";
}
}else{ echo "Error en la actualizacion";
}
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <menta charset ="UTF_8">
        <meta http-equiv="X-UA-Comparble" content="IE=edge">
        <meta name="viweport" content="width=device-width, initial-scale=1.0">
        <title>integradora</title>
        <link rel="shortcut icon" href="" type="image/x-icon">
        
    </head>
    <body>
        <div class="container">
            <form class="form" method="POST">

                <h1>Sign in</h1>
                <div class="inputs">
                    <input type="text" name="nusuarionuevo" value="<?php echo $NOMBRE;?>">
                    <div class="placeholder">Nombre</div>
                </div>
                <div class="inputs">
                    <input type="text"  name="ausuarionuevo"  value="<?php echo $APELLIDO;?>"> 
                    <div class="placeholder">Apellido</div>
                </div>
                <div class="inputs">
                    <input type="text"  name="cusuarionuevo"  value="<?php echo $CORREO;?>">
                    <div class="placeholder">Correo</div>
                </div>
                <div class="inputs">
                    <input type="password"name="conusuarionuevo"  value="<?php echo $CONTRASEÑA;?>">
                    <div class="placeholder">contraseña</div>
                </div>
                    <input class="res" type="submit" value="actualizar" name="update">
                    <a class="submit" type="name" href="">Ya tengo cuenta</a>
            </form>
        </div>
    </body>
    <style>
         *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .submit{
            text-align: center;
        }

        .container{
            padding: 3rem;
            background: rgb(0,0,0);
            background: linear-gradient(90deg, rgba(0,0,0,1) 44%, rgba(2,2,51,1) 78%);
            width: 700px;
            border-radius: 10px;
            box-shadow: 1px 1px 1px black,inset 1px 1px 1px white;
            display: flex;
            align-items: center;
            flex-direction: column;
            margin: auto;
        }

        h1{
            color: white;
        }

        .inputs{
            width: 100%;
            margin: 1rem;
            position: relative;
            display: flex;
        }
        input{
            width: 100%;
            background: none;
            outline: none;
            color: white;
            border: 1px solid gray;
            border-radius: 5px;
            padding: 1rem;
        }

        .placeholder{
            position: absolute;
            color: white;
            text-transform: uppercase;
            top: 1rem;
            left: 1rem;
            transition: .5s;
        }

        .inputs input:valid ~ .placeholder,
        .inputs input:focus ~ .placeholder{
            translate: 5px -27px;
            scale:.8;
            padding: 2px 10px;
            background: black;
            border-left: 1px solid gray;
            border-right:  1px solid gray;
        }

        .res{
            width: 80%;
            padding: .5rem;
            font-size: 1.5rem;
            font-family: arial;
            margin-top: 1rem;
            border-radius: 5px;
            color: white;
            background: rgb(0, 0, 0);
            border: 1px solid gray;
            position: relative;
            cursor: pointer;
            transition: .5s;
            transition-delay: 0;
        }
        .res {
            color: white;
            width: 50%;
        }

        .res::after,.res::before{
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background: blue;
            transition: 0;
        }

        .res::after{
            top: 0;
            left: 0;
        }

        .res::before{
            bottom: 0;
            right: 0;
        }

        .res:hover::after,.res:hover::before{
            width: 100%;
            transition: 1s;
        }

        .res:hover{
            transition: 1s;
            transition-delay: 1s;
            background: rgb(0, 0, 0);
        }

    </style>
</html