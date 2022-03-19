<?php

$arraySequencias = [
    [1, 3, 2, 1],
    [1, 3, 2],
    [1, 2, 1, 2],
    [3, 6, 5, 8, 10, 20, 15],
    [1, 1, 2, 3, 4, 4],
    [1, 4, 10, 4, 2],
    [10, 1, 2, 3, 4, 5],
    [1, 1, 1, 2, 3],
    [0, -2, 5, 6],
    [1, 2, 3, 4, 5, 3, 5, 6],
    [40, 50, 60, 10, 20, 30],
    [1, 1],
    [1, 2, 5, 3, 5],
    [1, 2, 5, 5, 5],
    [10, 1, 2, 3, 4, 5, 6, 1],
    [1, 2, 3, 4, 3, 6],
    [1, 2, 3, 4, 99, 5, 6],
    [123, -17, -5, 1, 2, 3, 12, 43, 45],
];

function sequenciaCrescente($array){
    $arrayDuplicatas = array_count_values($array);

    $maisDe1Duplicata = false;
    $duplicatas = 0;
    foreach ($arrayDuplicatas as $key => $value) {
        if ($value >= 3) {
            $maisDe1Duplicata = true;
        }elseif ($value == 2){
            $duplicatas ++;
        }
    }
    if ($duplicatas > 1) {
        $maisDe1Duplicata = true;
    }
    
    $quantidadeIndicesDecrescentes = 0;
    for ($i=0; $i < count($array); $i++) {
        $indiceAnterior = $i-1;
        if (isset($array[$indiceAnterior])) {
            if ($array[$i] < $array[$indiceAnterior]) {
                $quantidadeIndicesDecrescentes++;
            }
        }
    }

    $sorted = false;
    for ($i2=0; $i2 < count($array); $i2++) {
        $arraySemUmIndice = array();
        $sortArray = array();
        for ($i3=0; $i3 < count($array); $i3++) { 
            if ($i3 != $i2) {
                array_push($arraySemUmIndice, $array[$i3]);
            }
        }
        $sortArray = array_values($arraySemUmIndice);
        sort($sortArray);

        if ( $arraySemUmIndice == $sortArray ) {
            $sorted = true;
        }
    }

    if ($quantidadeIndicesDecrescentes > 1 || $maisDe1Duplicata==true || $sorted != true) {
        return false;
    }else {
        return true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência Crescente</title>
</head>
<body>
    <?php foreach ($arraySequencias as $key => $array) { ?>
        <p>
    <?php
        echo "[".implode(", ",$array)."] ".(sequenciaCrescente($array) ? "true" : "false")
    ?>
    </p>
    <?php } ?>
</body>
</html>