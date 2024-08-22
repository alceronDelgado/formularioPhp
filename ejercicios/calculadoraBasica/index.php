<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos.css">
    <title>switch CASE html</title>
</head>
<body>

<div class="title">
        <h1>hello world</h1>
</div>
    <div class="container">
        <div class="form">
            <form action="index.php" method="post">
                <label for=""> <span class="item1">digita el valor 1</span></label>
                <input type="number" name="valor1" id="" placeholder="" class="item">
            <br><br>
                <label for=""><span class="item1">digita el valor 2</span></label>
                <input type="number" name="valor2" id="" placeholder="" class="item">
            <br><br>
                <label for=""><span class="item1">Operación matemática</span></label>
            <select name="opcion" id="" class="item">
                <option value="suma">suma</option>
                <option value="resta">resta</option>
                <option value="multiplicación">multiplicación</option>
                <option value="división">división</option>
            </select>
            <button type="submit" id="enviarDato">enviar dato</button>
            </form>

        </div>
    </div>

</body>
</html>




<?php

$resultado = 0;

if ($_POST) {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $opcion = $_POST['opcion'];

    switch ($opcion) {
        case "suma":
            $resultado = $valor1 + $valor2;
            echo "<br>";
        break;

    case "resta":
        $resultado = $valor1 - $valor2;
        echo "<br>";

        break;

    case "multiplicación":
        echo "<br>";
        $resultado = $valor1 * $valor2;


        break;

        case "división":

        if ($valor1 == 0 || $valor2 == 0) {
            echo "<br>";
            echo "valor por 0";
            break;
        }else{
            $resultado = $valor1 / $valor2;
            echo "<br>";

            break;
        }

        default:
        echo "Opción no disponible".$resultado;
        break;
    }

}

?>
<h1><?php echo "El resultado de la operación es: ".$resultado;
?></h1>