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

    $lista_frutas = array('banana', 'maçã', 'uva', 'morango');
    // retorna true ou false
    echo in_array('maçã',$lista_frutas);
    // retorna o indice ou null
    echo array_search('uva',$lista_frutas)
    ?>
</body>

</html>