<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computador ejercicio</title>
</head>
<body>
    <header>
        <h1>Calcular Computador</h1>
    </header>

    <div class="container">
        <form action="" method="post">
            <input type="number" name="valor" id="" min=0 placeholder="valor computador">
            <select name="option" id="">
                <option value="----">Seleccione marca</option>
                <option value="HP">HP</option>
                <option value="LENOVO">LENOVO</option>
                <option value="ABACO">ABACO</option>
                <option value="OTRO">OTRO</option>
            </select>
            <button type="submit">Calcular</button>
        </form>
    </div>


<?php

if($_POST){

    $option = $_POST['option'];
    $valor = $_POST['valor'];
    $costeComputador = 1000000;
    $descuento= 0;
    $case= "";
    $iva = 19;
    $totalDescuento = 0;
    $totalIva = 0;
    $totalAPagar = 0;


    if($valor >= 1000000){
        $descuento += 0.10;
    }

    if($option == 'ABACO'){
        $descuento += 0.05;
    }

    //Descuento computador
    $totalDescuento = ($descuento * $valor) / 100;
    //Aplicar iva
    $totalIva = ($valor * $iva) / 100;
    //sumar totalComputador + descuento aplicando iva.
    $totalAPagar = ($totalIva - $totalDescuento) +$valor;

    echo "Valor descuento: ".$totalDescuento;
    echo "Valor total: ".$totalAPagar;


    $total = $valor * (1 - $descuento);

    $valorIva = $valor * (1 + $total);
}

?>


if (($valor >= $costeComputador) && ($option == 'ABACO')) {
        echo "coste del computador es: mayor a 1 millon";
        $descuento = 15;
        $case = '1';

    }elseif ($option == 'ABACO') {
        $descuento = 5;
        $case = '2';

    }elseif ($valor >= $costeComputador) {
        $descuento = 10;
        $case = '3';
    }
    echo $descuento;

switch ($case) {
        case '1':
            //Descuento computador
            $totalDescuento = ($descuento * $valor) / 100;
            //Aplicar iva
            $totalIva = ($valor * $iva) / 100;
            //sumar totalComputador + descuento aplicando iva.
            $totalAPagar = ($totalIva - $totalDescuento) +$valor;
            break;

        case '2':
            //Descuento computador
            $totalDescuento = ($descuento * $valor) / 100;
            //Aplicar iva
            $totalIva = ($valor * $iva) / 100;
            //sumar totalComputador + descuento aplicando iva.
            $totalAPagar = ($totalIva - $totalDescuento) +$valor;
            break;
        case '3':
            //Descuento computador
            $totalDescuento = ($descuento * $valor) / 100;
            //Aplicar iva
            $totalIva = ($valor * $iva) / 100;
            //sumar totalComputador + descuento aplicando iva.
            $totalAPagar = ($totalIva - $totalDescuento) +$valor;
            break;

        default:
            echo "No hay ninguna opciòn establecida";
            break;


    }




</body>
</html>