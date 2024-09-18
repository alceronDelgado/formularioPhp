<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo triangulo</title>
</head>
<body>

<div class="title">
    <h1>Tipo de triángulo</h1>
    <form action="condicionales.php" method="post">
        <button type="submit">index</button>
    </form>
</div>

<div class="container-7">
    <form action="tipoTriangulo.php" method="post">
        <label for="">Digite el lado 1 del triángulo
        <input type="number" name="lado1" id="">
        </label>
        <label for="">Digite el lado 1 del triángulo 
        <input type="number" name="lado2" id="">
        </label>
        <label for="">Digite el lado 1 del triángulo
        <input type="number" name="lado3" id="">
        </label>
        <button type="submit">Determinar</button>
    </form>
</div>

<?php

$lado1 = !empty($_POST['lado1']) ? $_POST['lado1'] : null;
$lado2 = !empty($_POST['lado2']) ? $_POST['lado2'] : null;
$lado3 = !empty($_POST['lado3']) ? $_POST['lado3'] : null;
$mensaje;

if (($lado1 != $lado2 ) && ($lado2 != $lado3)) {
    $mensaje = "Triángulo escaleno";
}elseif (($lado1 == $lado2) && ($lado2 == $lado3)) {
    $mensaje = "Triángulo equilátero";
    
}else{
    $mensaje = "Triángulo isósceles";
}

echo $mensaje;

?>
</body>
</html> 