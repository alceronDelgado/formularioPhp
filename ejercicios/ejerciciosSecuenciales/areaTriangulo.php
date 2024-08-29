<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area triángulo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1 class="titulo">Metros Cubicos</h1>
  </header>

  <div class="container5">
    <form action="" method="post" class="formArea">
      <div class="base">
        <label>Base:
        </label>
      </div>
      <div class="inputBase">
        <input type="number" name="base" id="" min="0" placeholder="Digite la base">
      </div>
      <div class="altura">
        <label>Altura:
        </label>
      </div>
      <div class="inputAltura">
        <input type="number" name="altura" id="" min="0" placeholder="Digite la altura">
      </div>



      <br>
      <div class="enviarDato">

        <button type="submit">Calcular</button>
      </div>
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