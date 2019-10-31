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
    $texto = 'Um texto aleatório para testar as funções de string';

    // to lower
    echo $texto .'<br>';
    echo strtolower($texto);
    echo '<hr>';
    // to upper
    echo $texto .'<br>';
    echo strtoupper($texto);
    echo '<hr>';
    // upper case first
    echo $texto .'<br>';
    echo ucfirst($texto);
    echo '<hr>';
    // string length
    echo $texto .'<br>';
    echo strlen($texto);
    echo '<hr>';
    // replace
    echo $texto .'<br>';
    echo str_replace('aleatório', 'ameba',$texto);
    echo '<hr>';
    // 
    echo $texto .'<br>';
    echo substr($texto,0,8);
    echo '<hr>';

    ?>


</body>

</html>