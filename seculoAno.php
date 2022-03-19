<?php
$anoAtual = date('Y');

function SeculoAno($ano){
    return ceil($ano / 100);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função SeculoAno</title>
</head>
<body>
    <p><?php echo "Ano 1905 = século ".seculoAno(1905); ?></p>
    <p><?php echo "Ano 1700 = século ".seculoAno(1700); ?></p>
    <p><?php echo "Ano ".$anoAtual." = século ".seculoAno($anoAtual); ?></p>
</body>
</html>
