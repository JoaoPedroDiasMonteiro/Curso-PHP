<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    // string
    $nome = 'José da Silva';

    // int
    $idade = 107;

    // float
    $peso = 28.23;

    // boolean
    $fumante = true;

    ?>
    <h1>Ficha cadastral</h1>
    <p>
        Nome: <?= $nome ?> <br>
        Idade: <?= $idade ?> <br>
        Peso : <?= $peso ?> <br>
        Fumante: <?= $fumante ?>
    </p>
</body>

</html>