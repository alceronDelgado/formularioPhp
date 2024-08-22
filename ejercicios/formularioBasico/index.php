
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../estilos.css">
  <title>formulario</title>
</head>
<body>

<header>
  <h1>formulario</h1>
</header>

<div class="container">
  <form action="index.php" method="post" class="formBasico">
  <div class="a">

    <input type="text" name="nombre" id="" class="item" placeholder="nombre">

  </div>
  <div class="b">

    <input type="date" name="fecha" id="" class="item">

  </div>
  <div class="c">
    <input type="number" name="edad" id="" placeholder="edad" class="item">
  </div>
  <div class="d">

    <input type="number" name="numTelefono" id="" placeholder="telefono" class="item" min="0">
  </div>
  <div class="enviar">
    <button type="submit" class="btn">Enviar</button>
  </div>
  </form>

  <?php

  if ($_POST) {

    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $edad = $_POST['edad'];
    $numTelefono = $_POST['numTelefono'];

  ?>

  <div class="box">
    <h1 class="itemBox"><?php echo $nombre;?></h1>
    <h1 class="itemBox"><?php echo $fecha;?></h1>
    <h1 class="itemBox"><?php echo $edad;?></h1>
    <h1 class="itemBox"><?php echo $numTelefono;?></h1>

  </div>

  <?php } ?>

</div>



</body>
</html>
