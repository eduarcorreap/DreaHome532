<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
     <link rel="stylesheet" href="style.css">
    <title>Inicio de sesion</title>
</head>
<body>
    <form action="IniciarSesion.php" method="POST" >
      <h1>INICIAR SESION</h1>
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


      
      <i class="fa-solid fa-user" ></i>
      <label>Usuario</label>
      <input type="text" name="Usuario" placeholder="Email">
      
      <i class="fa-solid fa-unlock" ></i>
      <label>Clave</label>
      <input type="password" name="Clave" placeholder="Clave">
       <hr>
      <button type="submit">Iniciar Sesion</button>
      <a href="CrearCuenta.php">Crear Cuenta</a>


    </form>
     <style>
      body{
    background-image: url(img/spacejoy-RqO6kwm4tZY-unsplash.jpg);
    background-size: cover;
    background-position: center;
    width: 300px;
    justify-content: center;
    align-items: center;    
      }
      form{
        margin: auto;
        margin-left: 360px;
      }
      
      
       
       
      
     </style>
</body>
</html>