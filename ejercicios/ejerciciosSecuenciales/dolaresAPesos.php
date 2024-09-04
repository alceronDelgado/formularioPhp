<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dolares a pesos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1 class="titulo">Dolares a pesos</h1>
  </header>

  <div class="container2">
    <div class="elemento1">
    <form action="" method="post">
      <label>digite el valor a convertir
        <input type="number" name="valor" id="" min="0" >
        <button type="submit">Convertir</button>
      </label>
    </form>
    </div>

    <div class="elemento2">
      <form action="../../index.php" method="post" >
        <button type="submit" class="item">Index</button>
      </form>
      <form action="secuenciales.php" method="post">
        <button type="submit" class="item">Volver a ejercicios</button>
      </form>
    </div>


  </div>

  <?php

  if ($_POST) {
    $resultado = $_POST['valor'] * 4052;

  ?>

  <div class="elemento3">
      <h1 class="titulo"><?php echo $_POST['valor']." USD es igual a: $".$resultado." COP"; ?></h1>
    </div>

  <?php
  }
  ?>

</body>
</html>