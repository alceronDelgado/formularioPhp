<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular area</title>
</head>
<body>

    
    <div class="container-2">
        <form action="calcularArea.php" method="post">
            <select name="figura" id="">
                <option value="---">---</option>
                <option value="triangulo">Triángulo</option>
                <option value="circulo">Círculo</option>
                <option value="rectangulo">Rectángulo</option>
            </select>
            <label for="">Digite el valor de la figura</label>
                <input type="number" name="valor" id="">
            <label for="">Digite la base del triángulo</label>
                <input type="number" name="base" id="">
            <label for="">Digite la altura del triángulo</label>
                <input type="number" name="altura" id="">
            <label for="">Digite el radio del circulo</label>
            <input type="number" name="radio" id="">
            <button type="submit">Enviar</button>
        </form>
    </div>

<?php

if ($_POST) { 

    $opcion = $_POST['figura'];
    $valor = !empty($_POST['valor']) ? $_POST['valor'] : null; 
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $radio = $_POST['radio'];
    $resultado = 0;
    
    switch ($opcion) {
        case 'triangulo':
            $resultado = ($base * $altura) / 2;
            break;
        case 'circulo':
            $resultado = 3.1416 * ($radio * $radio);
            break;
        case 'rectangulo':
            $resultado = $base * $altura;
            break;
        default:
            $opcion = "";
            break;
    }

    echo "Opción elegida: ".$opcion;
    echo "El resultado de la operación es: ".$resultado;

}  ?>
</body>
</html>