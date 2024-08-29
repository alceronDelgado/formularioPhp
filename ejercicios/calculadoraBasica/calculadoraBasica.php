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
    <h1>Calculadora básica</h1>
</div>
    <div class="container">
        <form action="calculadoraBasica.php" method="post" class="formCalculadora">
            <div class="frmCl1">
                <label for="" class="a"> <span class="item1">digita el valor 1: </span></label>

            </div>
            <br><br>
            <div class="frmCl2">
            <input type="number" name="valor1" id="" placeholder="" class="item" required>

            </div>
            <div class="frmCl3">
            <label for=""><span class="item1">digita el valor 2: </span></label>
            </div>
            <div class="frmCl4">
            <input type="number" name="valor2" id="" placeholder="" class="item" required>
            </div>
            <br><br>
            <div class="frmCl5">
                <label for=""><span class="item1">Operación matemática</span></label>
            </div>
            <div class="frmCl6">
                <select name="opcion" id="" class="item">
                    <option value="suma">suma</option>
                    <option value="resta">resta</option>
                    <option value="multiplicación">multiplicación</option>
                    <option value="división">división</option>
                </select>
            </div>
            <div class="calcular">
                <button type="submit" id="enviarDato">enviar dato</button>
            </div>

        </form>
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
            echo "<h1>valor por 0</h1>";
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
<h1><?php

echo ($resultado > 0) ? "el resultado de la operacion es :".$resultado : "";

?></h1>