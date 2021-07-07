<html>

<head>
<title> Cachando datos del formulario</title>

</head>

<body>
<?php   

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$mensaje = $_POST["msg"];

echo "Nombre : ".$nombre."<br>";
echo "Apellidos: ".$apellidos."<br>";
echo "Email : ".$email."<br>";
echo "Mensaje : ".$mensaje."<br>";

$servername= "localhost";
$database= "133467";
$username= "root";
$password= "";

$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
 die ("Conexion fallida....".mysqli_connect_error());

 } echo "Conexion Exitosa.........";



$sql= "INSERT INTO users  (nombre,apellidos,email,mensaje,id)
VALUES ('$nombre','$apellidos','$email','$mensaje','') ";
if (mysqli_query($conn,$sql)){
    echo "registro exitoso";
} else {
    echo "Error al registrar"."<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>

</body>

</html>