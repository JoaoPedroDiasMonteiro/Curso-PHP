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

    $funcionarios = [
        ['nome' => 'João', 'salário' => 99, 'idade' => 123],
        ['nome' => 'Maria', 'salário' => 199],
        ['nome' => 'Ana', 'salário' => 299],
        ['nome' => 'Alana', 'salário' => 399],
        ['nome' => 'Paulo', 'salário' => 499],
    ];

    foreach ($funcionarios as $key => $funcionario) {
        foreach ($funcionario as $key => $value) {
            echo "$key: $value <br>";
        }
        echo '<hr>';
    }

    ?>
</body>

</html>