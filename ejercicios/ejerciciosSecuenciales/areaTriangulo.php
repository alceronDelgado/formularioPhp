<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area triángulo</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <header>
    <h1>Metros Cubicos</h1>
  </header>

  <div class="container">
    <form action="" method="post">
      <label>Base:
        <input type="number" name="base" id="" min="0" placeholder="Digite la base">
      </label>
      <br>
      <label>Altura:
        <input type="number" name="altura" id="" min="0" placeholder="Digite la altura">
      </label>
      <button type="submit">Calcular</button>
    </form>
    <form action="../../index.php" method="post" >
      <button type="submit" class="item">Index</button>
    </form>
  </div>

  <?php

  if ($_POST) {
    $base = $_POST['base'];
    $altura = $_POST['altura'];

    echo 'base Digitada: '.$base;
    echo 'Altura digitada: '.$altura;

    $resultado = ($base * $altura) / 2;

    echo 'El area del triángulo es: '.$resultado;
  }

  ?>

</body>
</html>