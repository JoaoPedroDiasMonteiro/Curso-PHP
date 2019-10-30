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

    $valor = true;
    // $valor2 = (float) $valor; //float, double, real
    // $valor2 = (string) $valor;

    // $valor2 = (int) $valor; // int, integer
    // $valor2 = (string) $valor;

    //
    // $valor2 = (boolean) $valor;

    $valor2 = (string) $valor;
    



    echo $valor .' '. gettype($valor); 
    echo '<br>';
    echo $valor2 .' '. gettype($valor2); 

   
    ?>


</body>

</html>