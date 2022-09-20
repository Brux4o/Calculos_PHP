<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculos.html">
    <title>Algoritimo A</title>
</head>

<body>
    <?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $soma = $valor1 + $valor2;
    ?>
    <p>A soma é:</p>
    <?php
    if ($soma > 10) {
        $soma = $valor1 + $valor2 + 8;
        echo $soma;
    } else if ($soma <= 10) {
        $soma = $valor1 + $valor2 - 5;
        echo $soma;
    }

    ?></p>
</body>

</html>
