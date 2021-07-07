<html>

<head>
<title> Cachando datos del formulario</title>
<link rel="stylesheet" type "text/css" href="estilos.css">
</head>

<body class = "consulta">
<?php   


$servername= "localhost";
$database= "133467";
$username= "root";
$password= "";

$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn){
 die ("Conexion fallida....".mysqli_connect_error());

 } echo "Conexion Exitosa.........";



 echo 'Conectado a la base de datos.<br>';

 //me devuelve un array 
  $result = $conn->query("SELECT *  FROM users");

  echo "Numero de resultados: $result->num_rows <br>";


 echo " <table>
  <tr>
    <td><strong>Id</strong></td>
    <td><strong>Nombre</strong></td>
    <td><strong>Apellidos</strong></td>
    <td><strong>Email</strong></td>
    <td><strong>Mensaje</strong></td>
  </tr>";

  foreach ($result as $row) {

echo "
    <tr>
    <td>".$row['id']."</td>
    <td>".$row['nombre']."</td>
    <td>".$row['apellidos']."</td>
    <td>".$row['email']."</td>
    <td>".$row['mensaje']."</td>
  </tr>";
   
   
        
}

echo "<table>";


             $result->close();

             $conn->close();

?>






</body>