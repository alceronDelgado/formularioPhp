<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censos comunidad </title>
</head>
<body>
    <div class="title">
        <h1>Censos regionales</h1>
        <form action="condicionales.php" method="post">
            <button type="submit">index</button>
        </form>
    </div>

    <div class="container-6">
        <form action="censos.php" method="post">
            <label>
                <input type="number" name="edad" placeholder="digite su edad" min=0 max=100>
                <input type="number" name="valor" placeholder="Digite su valor" min=0 >
            </label>
            <label for="">seleccione el genero
                <select name="genero" id="">
                    <option value="---">---</option>
                    <option value="h">hombre</option>
                    <option value="m">mujer</option>
                </select>
            </label>
            <label for="">seleccione su tipo
                <select name="tipo" id="">
                    <option value="---">---</option>
                    <option value="alto">Alto</option>
                    <option value="bajo">Bajo</option>
                    <option value="medio">Medio</option>
                </select>
            </label>
            <label for="">seleccione el nacionalidad
                <select name="nacionalidad" id="">
                    <option value="---">---</option>
                    <option value="latino">latino</option>
                    <option value="aleman">aleman</option>
                    <option value="hindu">hindu</option>
                    <option value="colombiano">colombiano</option>
                </select>
            </label>
            <button type="submit">Determinar censo</button>
        </form>
    </div>
    

<?php

if ($_POST) {

    $edad = $_POST['edad'];
    $valor = $_POST['valor'];
    $genero = ($_POST['genero'] == '---') ? null : $_POST['genero'];
    $tipo = ($_POST['tipo'] == '---') ? null : $_POST['tipo'] ;
    $nacionalidad = ($_POST['nacionalidad'] == '---') ? null :$_POST['nacionalidad'] ;
    $resultado;
    $mensaje;

    if (($edad >= 35) && ($edad <= 45) && ($genero == 'm') && ( $tipo == 'alto'))  {
        $mensaje = "Se triplica tu dinero";
        $resultado = $valor * 3;
    }elseif (($nacionalidad == 'latino') && ($tipo == 'medio') && ($edad < 30)) {
        $mensaje = "se divide entre 3";
        $resultado = $valor / 3;
    }elseif (($genero == 'm') && ($nacionalidad == 'hindu') && ($edad > 55)) {
        $mensaje = "se le restan $50.000";
        $resultado = $valor - 50000;
    }else{
        $mensaje = "Error al realizar el censo";
    }

    echo $mensaje." ".$resultado;

}

?>
</body>
</html>