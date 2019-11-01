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

    $a = 1;
    echo 'inicio loop <br>';
    while ($a <= 10) {
        if ($a ==5) {
            $a++;
            continue;
        }
        echo "$a <br>";
        $a++;
        



        if ($a == 9) {
            break;
        }
    }
    echo 'fim loop';

    ?>
</body>

</html>