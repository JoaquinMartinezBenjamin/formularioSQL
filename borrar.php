<html>

<head>
<title> Cachando datos del formulario</title>
<link rel="stylesheet" type "text/css" href="estilos.css">
</head>

<body>
<?php   


$id = $_POST["idregistro"];


$servername= "localhost";
$database= "133467";
$username= "root";
$password= "";



$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
 die ("Conexion fallida....".mysqli_connect_error());

 } echo "Conexion Exitosa.........";




$sql=  " DELETE FROM users WHERE id= '$id' ";

if (mysqli_query($conn,$sql)){
    echo "borrado exitoso";
} else {
    echo "Error al borrar registro"."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>













</body>