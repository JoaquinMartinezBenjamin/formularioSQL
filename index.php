<!DOCTYPE html>
<html>

<head>
    <title>formulario</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" type "text/css" href="estilos.css">
</head>

<body>
    <div class="wrapper">

        <h1>Formulario de Contacto</h1>
        <form action="datos.php" target = "_blank" class="form-area" method="POST">


            <div class="detalles-area">
                <label for "nombre"> Nombre</label>
                <input type="text" name="nombre" required>
                <label for="apellidos"> Apellidos</label>
                <input type="text" name="apellidos" required>
                <label for="email"> Correo electronico</label>
                <input type="email" name="email" required>
                
               
            </div>

            <div class="mensaje-area">
                <label for="msg">Mensaje</label>
                <textarea name="msg" required></textarea>
                <button type="submit"> Enviar datos</button>
            </div>

        </form>
        
    </div>

<!--             <h1> Consola</h1>

    <div class = "consola">
    <center>
    <iframe src="datos.php" style="width: 75%; height: 80%" name="insertar"></iframe>
</center>
    </div> -->


    <h1><a href="consultar.php" target="consultar">Consultar registros</a> </h1>
    <div class = "consultas">
   
    <iframe src="consultar.php" name="consultar"></iframe>

    
     </div>

     <div class="form-borrar">
     <form action="borrar.php" target = "_blank"  method="POST">
         <center>
         
     <label for "idregistro"> Introduzca id del registro a borrar </label>
                <input type="text" name="idregistro" required>
                <button type="submit"> Enviar id</button>
             
</center>
     </form>
     </div>
</body>

</html>