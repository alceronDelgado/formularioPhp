<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hormonas</title>
</head>
<body>
    <header>
        <h1 class="title">Hormonas</h1>
    </header>
    <div class="">
        <form action="hormonas.php" method="post">
            <div class="elemento">
                <input type="number" name="edad" id="" placeholder="digite la edad del paciente" min="0">
            </div>
            <div class="elemento">
                <input type="number" name="hormonas" id="" placeholder="digite la cantidad de hormonas" step=".01" min="0">
            </div>
            <div class="elemento">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

<?php
    $edad = 0;
    $nivelHormonas = 0;
    $resultado = "";
if ($_POST) {
    $edad = $_POST['edad'];
    $nivelHormonas = $_POST['hormonas'];
    if  (
        (($edad >= 12) && ($edad <= 14) && ($nivelHormonas < 14) && ($nivelHormonas < 27)) ||
        (($edad >= 15) && ($edad <= 16) && ($nivelHormonas < 11) && ($nivelHormonas < 19)) ||
        (($edad >= 17) && ($edad <= 20) && ($nivelHormonas < 11) && ($nivelHormonas < 15)) ||
        (($edad >= 21) && ($edad <= 24) && ($nivelHormonas < 11.5) && ($nivelHormonas < 15)) ||
        (($edad >= 25) && ($edad <= 33) && ($nivelHormonas < 13.6) && ($nivelHormonas < 16.5))
    ) {
        $resultado = "Estas embarazada";

    }else{
        $resultado = "No Estas embarazada";
    }

}
?>

<div class="box">
    <h1><?php echo $edad;?></h1>
    <h1><?php echo $nivelHormonas;?></h1>
    <h1><?php echo $resultado;?></h1>
</div>

</body>
</html>