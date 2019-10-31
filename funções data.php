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
   
    // recuperar data
    echo date('d/m/Y H:i');

    echo '<br>'. date_default_timezone_get();
    date_default_timezone_set('America/Sao_Paulo');
    echo '<br>';
    echo date('d/m/Y H:i');

    //

    $data_inicial = '2019/12/20';
    $data_final = '2020/12/20';
    // timestamp
    echo '<hr>';
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    echo "a diferença de dias entre $data_inicial e $data_final é de:" . ($time_final - $time_inicial) / (24*60*60) .'dias';



    ?>
</body>

</html>