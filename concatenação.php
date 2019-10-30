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

    $nome = 'José';
    $cor = 'carro';
    // aspas normais
    echo 'Olá ' . $nome . ', sua cor preferida é ' . $cor . '. <br>';
    // aspas duplas
    echo "Olá $nome, sua cor preferida é $cor. <br>";
    // erro
    echo 'Olá $nome, sua cor preferida é $cor.';


    ?>

</body>

</html>