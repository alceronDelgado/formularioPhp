<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computador ejercicio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="title">
        <h1>Calcular Computador</h1>
    </header>

    <div class="container-1 ">
        <div class="abaco">
            <form action="computadoraAbaco.php" method="post" class="abaco">
                    <div class="uno itemAbaco">
                        <label for="">Valor del Computador:</label>
                        <input type="number" name="valor" id="" min=0 placeholder="valor computador" REQUIRED class="">
                    </div>
                    <div class="dos itemAbaco">
                        <label for="">Marca:</label>
                        <select name="option" id="" class="">
                            <option value="----">Seleccione marca</option>
                            <option value="HP">HP</option>
                            <option value="LENOVO">LENOVO</option>
                            <option value="ABACO">ABACO</option>
                            <option value="OTRO">OTRO</option>
                        </select>
                    </div>
                    <div class="tres itemAbaco">
                        <button type="submit" class="">Calcular</button>
                    </div>
            </form>
        </div>
        
        <div class="cuatro inicio">
            <form action="condicionales.php" method="post" class="">
                <button type="submit">index</button>
            </form>
        </div>
    </div>
<?php

$totalAPagar = 0;

if($_POST){

    $option = $_POST['option'];
    $valor = $_POST['valor'];
    $costeComputador = 1000000;
    $descuento= 0;
    $case= "";
    $iva = 19;
    $totalDescuento = 0;
    $totalIva = 0;
    

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
    }elseif($valor < 100000){
        $descuento = 1;
        $case = '4';
    

    }elseif ($valor < 1000000 && $option != 'ABACO'){
        $descuento = 1;
        $case = '5';
    }else{
        echo "";
    }

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
        case '4':
                $totalIva = ($valor * $iva) / 100;
                $totalAPagar = $totalIva  +$valor;
            break;
        case '5':
                $totalIva = ($valor * $iva) / 100;
                $totalAPagar = $totalIva  +$valor;
        break;

        default:
            echo "No hay ninguna opciòn establecida";
            break;
    }

    $total = $valor * (1 - $descuento);

    $valorIva = $valor * (1 + $total);
}

?>


<h1 class="resul">
    <?php 

    $resultado = "Total a pagar: $ ";

    if ($totalAPagar == 0) {
        echo "";
    }else{
        echo $resultado.$totalAPagar." COP"; 
        
        
    }

    ?>
</h1>


</body>
</html>