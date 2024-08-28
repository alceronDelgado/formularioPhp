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
    <h1>Dolares a pesos</h1>
  </header>

  <div class="container">
    <form action="" method="post">
      <label>digite el valor a convertir
        <input type="number" name="valor" id="" min="0" >
        <button type="submit">Convertir</button>
      </label>
    </form>
    <form action="../../index.php" method="post" >
      <button type="submit" class="item">Index</button>
    </form>
  </div>

  <?php

  if ($_POST) {
    $valor = $_POST['valor'];
    $resultado = $valor * 4052;

    echo $valor." USD es igual a: ".$resultado;
  }


  ?>

</body>
</html>