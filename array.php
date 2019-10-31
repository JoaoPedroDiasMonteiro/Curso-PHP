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
    $lista_frutas2 = ['banana', 'maçã', 'uva', 'morango'];

    var_dump($lista_frutas);
    print_r($lista_frutas2);

    echo  $lista_frutas2[3];

    $lista_frutas3 =  [
        'a' => 'banana',
        'b' => 'maçã',
        'c' => 'uva',
        'd' => 'morango'
    ];

    echo  $lista_frutas3['d'];



    ?>
</body>

</html>