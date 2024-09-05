<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRUTASS</title>
</head>
<body>
    <header>
        <h1>Fruteria</h1>
    </header>

    <div class="container">
        <form action="peras.php" method="post">
            <input type="number" name="cantidad" id="" placeholder="digite la cantidad" min="0">
            <button type="submit">Calcular</button>
        </form>
    </div>


<?php
    if ($_POST) {
        $valorPera = 400;
        $cantidad = $_POST['cantidad'];
        $descuento = 1;
        $totalDescuento = 0;
        $totalAPagar = 0;
        if ($cantidad >= 0 && $cantidad <= 2) {
            $descuento = $descuento - 1;
            $total = $cantidad * $valorPera;
        }
        if ($cantidad >= 3 && $cantidad <= 5) {
            $descuento += 9;
        }
        if ($cantidad >= 6 && $cantidad <= 10) {
            $descuento = $descuento + 14;
        }
        
        if ($cantidad >= 11) {
            $descuento = $descuento + 17;
        }
        $total = $cantidad * $valorPera;
        $totalDescuento = ($total * $descuento)/100;
        $totalAPagar = $total - $totalDescuento;

?>


<h1><?php echo "Cantidades digitadas: ".$cantidad; ?></h1>
<h1><?php echo "Valor unidad: $".$valorPera. " COP";?></h1>
<h1><?php echo "Tienes un descuento de : ".$descuento. "%";?></h1>
<h1><?php echo "Total a pagar: $".$totalAPagar." COP";?></h1>

<?php
}

?>



</body>
</html>