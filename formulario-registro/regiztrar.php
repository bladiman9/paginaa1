
<?php
include 'cn.php';
//recibir lo dato y almcenarlo en variable
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$correo =$_POST["correo"];
$usuario =$_POST["usuario"];
$clave =$_POST["clave"];
$telefono = $_POST["telefono"];
//conzulta para inzertar
$insertar ="INSERT INTO usuarios(nombre,apellidos,correo,usuario,clave,telefono)VALUES('$nombre','$apellidos','$correo','$usuario','$clave','$telefono')";

//ejecutar conzulta

$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
    echo'error al registrarse';
}else{
    echo'usuario registrado exitosamente';
}
//cerrar conexion
mysqli_close($conexion);