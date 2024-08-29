<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicios secuenciales</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1 class="titulo">Ejercicios secuenciales</h1>
  </header>

  <div class="container">
    <div class="ejercicio1">
      <form action="dolaresAPesos.php" method="post" >
          <label for="">
              <span>dolares a pesos</span>
          </label>
          <button type="submit" class="item" id="ejercicio1">Ejercicio 1</button>
      </form>
    </div>
    <div class="ejercicio2">
        <form action="llamadas.php" method="post" >
        <label for="">
          <span>llamadas</span>
        </label>
        <button type="submit" class="item">Ejercicio 2</button>
      </form>
    </div>
    <div class="ejercicio3">
      <form method="post" action="metrosCubicos.php" class="c">
        <label for="">
          <span>Gasto por mes de agua</span>
        </label>
        <button type="submit" class="item">Ejercicio 3</button>
      </form>
    </div>
    <div class="ejercicio4">
      <form method="post" action="areaTriangulo.php" class="d">
        <label for="">
          <span>Area triángulo</span>
        </label>
        <button type="submit" class="item">Ejercicio 4</button>
      </form>
    </div>
    <div class="index">
        <form action="../../index.php" method="post" >
          <button type="submit" class="item">Index</button>
        </form>
    </div>
  </div>

</body>
</html>