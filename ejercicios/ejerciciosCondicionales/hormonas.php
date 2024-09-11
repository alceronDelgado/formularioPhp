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
    <div class="container-4">
        <form action="hormonas.php" method="post" class="hormonas">
            <label for="" class="labelHormonas1">Digite edad del paciente
            </label>
            <input type="number" name="edad" id="" placeholder="digite la edad del paciente" min="0" class="itemHormonas1">

            <label for="" class="labelHormonas2">Digite su indice de hormonas:
            </label>
            <input type="number" name="hormonas" id="" placeholder="digite la cantidad de hormonas" step=".01" min="0" class="itemHormonas2">
            <button type="submit" class="itemHormonas3">Enviar</button>
        </form>

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

    <div class="boxHormonas">
        <h1><?php echo "Edad digitada por el usuario: ".$edad; ?>
        <h1><?php echo "Nivel Hormonas digitada por el usuario: ".$edad; ?></h1>
        <h1><?php echo "Resultado: ".$resultado;?></h1>
    </div>
    </div>
</body>
</html>