<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metros Cubicos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1 class="titulo">Metros Cubicos</h1>
  </header>

  <div class="container5">
    <form action="" method="post">
      <label>Cantidad de litros registrados por mes:
        <input type="number" name="litros" id="" min="0" >
        <button type="submit">Convertir</button>
      </label>
    </form>
    <form action="../../index.php" method="post" >
      <button type="submit" class="item">Index</button>
    </form>
  </div>

  <?php

  if ($_POST) {
    $litros = $_POST['litros'];

    //Convertir a metro cubico los litros digitados por el usuario
    $metroCubico = ($litros * 1) / 1000;

    echo 'Litros registrados: '.$litros;
    echo 'Valor metro cubico: '.$metroCubico;
  }

  ?>

</body>
</html>