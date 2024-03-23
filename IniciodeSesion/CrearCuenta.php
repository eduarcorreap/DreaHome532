<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleCrearC.css">
</head>
<body>
  
     <h1>DREAM HOME</h1>

     <form action="CrearCuenta.php" method="POST">
      
   <h2>CREAR CUENTA</h2>
   <hr>
       <?php
       if (isset($_GET['error'])) {
        ?>
        <p class="error">
          <?php
           echo $_GET['error']
        ?>

        </p>
        <?php
       }
       ?>

     <label for="nombre">Nombre:</label><br>
     <input type="text" id="nombre" name="nombre" placeholder="Nombre"><br>
     <label for="apellido">Apellido:<br></label>
     <input type="text" id="Apellido" name="Apellido"placeholder="Apellido"><br>
     <label for="Email">Correo:<br></label>
     <input type="text" id="Email" name="Email"placeholder="Correo"><br>
     <label for="telefono">Telefono:<br></label>
     <input type="number" id="telefono" name="Telefono"placeholder="Telefono"><br>
     <label for="Direccion">Direccion:<br></label>
     <input type="text" id="direccion" name="direccion"placeholder="Direccion"><br>

   <hr>
   <input type="radio" id="masculino" name="genero" value="masculino">
<label for="masculino">Masculino</label><br>
<hr>
<input type="radio" id="femenino" name="genero" value="femenino">
<label for="femenino">Femenino</label><br>




  </div>




     <hr>
     <label for="contraseña">Crea una contraseña:<br></label>
     <input type="password" id="contraseña" name="contraseña"  placeholder="Contraseña"><br>
     
     <button type="submit"> <a href="inicio.html">Crear Cuenta</a></button>
     
    
    
     
      


     
</body>
</html>