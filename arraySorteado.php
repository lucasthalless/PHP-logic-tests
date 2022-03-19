<?php

$arraySorteado = array();
for ($i = 0; $i < 10; $i++){
    array_push($arraySorteado, rand(1,10));
}
function valoresUnicosArray ($array = array()){
    $arrayNumerosUnicos = array_count_values($array);

    $numerosUnicos = '';
    foreach ($arrayNumerosUnicos as $key => $value) {
        if ($value == 1) {
            $numerosUnicos .= $key.', ';
        }
    }
    $resultadoValoresArray = "Array sorteado = [".implode(', ', $array)."] <br>".(strlen($numerosUnicos) === 0 ? "Todos os números se repetem." : "Os números que não se repetem são esses: ".$numerosUnicos);
    return $resultadoValoresArray;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sorteado</title>
</head>
<body>
    <p><?php echo htmlspecialchars_decode(valoresUnicosArray($arraySorteado)) ?></p>
</body>
</html>