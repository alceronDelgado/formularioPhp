<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRUTASS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="title">
        <h1>Fruteria</h1>
    </header>

    <div class="container-3">
        <div class="itemPeras">
            <form action="peras.php" method="post" class="peras">
                <input type="number" name="cantidad" id="" placeholder="digite la cantidad" min="0" class="cantidad ">
                <button type="submit" class="enviar">Calcular</button>
            </form>
        </div>
        <div class="itemPeras">
            <form action="condicionales.php" method="post" class="inicioPeras ">
                <button type="submit">Inicio</button>
            </form>
        </div>
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


<h1 class="resultadoPeras"><?php echo "Cantidades digitadas: ".$cantidad; ?></h1>
<h1 class="resultadoPeras"><?php echo "Valor unidad: $".$valorPera. " COP";?></h1>
<h1 class="resultadoPeras"><?php echo "Tienes un descuento de : ".$descuento. "%";?></h1>
<h1 class="resultadoPeras"><?php echo "Total a pagar: $".$totalAPagar." COP";?></h1>



<?php
}

?>
</body>
</html>