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

    //false (true/fase) - boolean
    // null empty - valores especiais

    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;
    // null
    echo 'null <br>';
    if (is_null($funcionario1)) {
        echo 'sim, é null';
    } else {
        echo 'não é null';
    }
    echo '<br>';
    if (is_null($funcionario2)) {
        echo 'sim, é null';
    } else {
        echo 'não é null';
    }
    echo '<hr>';

    // empty
    echo 'empty <br>';
    if (empty($funcionario1)) {
        echo 'sim, é empty';
    } else {
        echo 'não é empty';
    }
    echo '<br>';
    if (empty($funcionario2)) {
        echo 'sim, é empty';
    } else {
        echo 'não é empty';
    }
    echo '<hr>';
    // false
    echo 'false <br>';
    if (empty($funcionario3)) {
        echo 'sim, é empty';
    } else {
        echo 'não é empty';
    }
    echo '<br>';
    if (is_null($funcionario3)) {
        echo 'sim, é null';
    } else {
        echo 'não é null';
    }


    ?>
</body>

</html>