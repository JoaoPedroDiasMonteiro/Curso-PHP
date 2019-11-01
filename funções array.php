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

    $array = [101 => 'carro', 'cebola' => 'avião,', 'nave'];
    $retorno = is_array($array);

    // is_array
    if ($retorno) {
        echo 'sim, é um array';
    } else {
        echo 'não, não é um array';
    }

    // array_keys
    echo '<pre>';
    print_r($array);

    $array_keys = array_keys($array);

    echo '<pre>';
    print_r($array_keys);

    // sort
    echo '<pre>';
    print_r($array);
    sort($array); // true ou false 
    echo '<pre>';
    print_r($array);

    // asort
    $array = [101 => 'carro', 'cebola' => 'avião,', 'nave'];
    echo '<pre>';
    print_r($array);
    asort($array); // true ou false 
    echo '<pre>';
    print_r($array);

    // count
    echo count($array);

    // array merge
    $array2 = ['banana', 'maçã', 'morango', 'melancia'];
    $merge = array_merge($array, $array2);
    print_r($merge);

    // explode
    $string = '01/11/2019';
    $array_retorno = explode('/', $string);
    print_r($array_retorno);

    //
    $array = ['a','b','c','d','e'];
    $retorno = implode(',', $array);
    echo $retorno

    ?>
</body>

</html>