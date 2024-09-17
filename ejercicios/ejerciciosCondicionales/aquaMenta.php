<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aqua menta</title>
</head>
<body>

<div class="title">
    <hi>Aqua menta</hi>
</div>
<div class="container-5">
    <form action="aquaMenta.php" method="post">
        <label for="">Digite la cantidad de horas trabajadas: </label>
        <input type="number" name="horas" id="">
        <input type="submit" value="calcular">
    </form>
</div>

<?php

if ($_POST) {
    $horas = $_POST['horas'];
    if ($horas > 40) {
        $horasRestantes = $horas-40;
        $horasBase = 40 * 4000;
        $totalHorasAdicionales = $horasRestantes * (8000);
        $resultado = $totalHorasAdicionales + $horasBase;

    }else{
        $resultado = $horas * 4000;
    }

    echo "valor horas base trabajadas: $".$horasBase;
    echo "Cantidad de horas extras extras trabajadas: ".$horasRestantes;
    echo "Valor de horas extras extras trabajadas: ".$totalHorasAdicionales;
    echo "Total a pagar al empleado: $".$resultado." COP";
}

?>
</body>
</html>