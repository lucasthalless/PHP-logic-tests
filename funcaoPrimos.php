<?php
function primos($numeroInicial, $numeroFinal) {
    $arrayPrimos = array();
    $numeroInicialInserido = $numeroInicial;
    
    for ($i = $numeroInicial+1; $i<$numeroFinal-1; $i++){
        $numeroAtual = $i;
        $foiDividido = 0;
        for ($indice2 = 1; $indice2<=$numeroAtual; $indice2++){
            if ($numeroAtual % $indice2 == 0){
                $foiDividido ++;
            }
        }
        if ($foiDividido <= 2){
            array_push($arrayPrimos, $numeroAtual);
        }
    }
    $quantidadePrimos = count($arrayPrimos);
    $arrayPrimos = implode(", ", $arrayPrimos);
    $primosEncontrados = "Numero Inicial = ".$numeroInicialInserido." <br>
    Número Final = ".$numeroFinal." <br>
    Resposta: Encontrados ".$quantidadePrimos." números primos, são eles: ".$arrayPrimos;

    return $primosEncontrados;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Primos</title>
</head>
<body>
    <?php echo htmlspecialchars_decode(primos(10, 29)) ?><br><br>
    <?php echo htmlspecialchars_decode(primos(1, 11)) ?><br><br>
    <?php echo htmlspecialchars_decode(primos(55, 155)) ?><br><br>
</body>
</html>
