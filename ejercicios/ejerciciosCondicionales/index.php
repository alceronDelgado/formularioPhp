
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