<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Llamadas</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1 class="titulo">Llamadas</h1>
  </header>

  <div class="container3">
      <form action="" method="post">
      <label>Digite cantidad de minutos
        <input type="number" name="minutos" id="" min="0" >
        <button type="submit">Convertir</button>
      </label>
    </form>
    <form action="../../index.php" method="post" >
      <button type="submit" class="item">Index</button>

    </form>
    <form action="secuenciales.php" method="post">
        <button type="submit" class="item">Volver a ejercicios</button>
    </form>
  </div>

  
  <?php

  if ($_POST) {
    $minutos = $_POST['minutos'];
    $resultado = $minutos * 200;
  ?>

  <div class="box-llamada">
    <div class="itemLlamada1"><h1><?php echo 'Minutos digitados: '.$minutos. PHP_EOL; ?></h1></div>
    <div class="itemLlamada2"><h1><?php echo 'Valor del minuto: 200'. PHP_EOL; ?></h1></div>
    <div class="itemLlamada3"><h1><?php echo 'Total a pagar: '.$resultado. PHP_EOL; ?></h1></div>
  </div>

  <?php
  }
  ?>


</body>
</html>