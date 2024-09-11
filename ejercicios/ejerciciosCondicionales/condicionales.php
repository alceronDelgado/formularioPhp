
<!-- $option = $_POST['option'];
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
    echo "Valor total: ".$totalAPagar; -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios condicionales</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1 class="title">Condicionales</h1>
</header>

<div class="container">
    <form action="computadoraAbaco.php" method="post">
        <div class="item">
            <button type="submit" class="element">Abaco</button>
        </div>
    </form>
    <form action="peras.php" method="post">
        <div class="item">
            <button type="submit" class="element">Peras</button>
        </div>
    </form>
    <form action="hormonas.php" method="post">
        <div class="item">
            <button type="submit" class="element">Hormonas</button>
        </div>
    </form>
    
    <form action="../../index.php" method="post">
        <div class="item">
            <button type="submit" class="element">Index</button>
        </div>
    </form>
</div>

</body>
</html>