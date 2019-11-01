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

    $registros = [
        ['título' => 'título1' , 'conteúdo' => 'conteudo1'],
        ['título' => 'título2' , 'conteúdo' => 'conteudo2'],
        ['título' => 'título3' , 'conteúdo' => 'conteudo3'],
        ['título' => 'título4' , 'conteúdo' => 'conteudo4'],
        ['título' => 'título5' , 'conteúdo' => 'conteudo5'],
    ];
    for ($i = 0; $i < count($registros); $i++) {
        echo '<h3>' .$registros[$i]['título'] . '</h3>';
        echo '<p>' .$registros[$i]['conteúdo'] . '</p>';
        echo '<hr>';
    }

    ?>
</body>

</html>