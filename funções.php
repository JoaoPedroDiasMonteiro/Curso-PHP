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
    $nome = 'Mario';
    function exibirBoasVindas($nome)
    {
        echo "Olá $nome <br>";
    }
    exibirBoasVindas($nome);

    function calcularAreaTerreno($largura, $comprimento)
    {
        $areaTerreno = $largura * $comprimento;
        return $areaTerreno;
    }
    $resultado = calcularAreaTerreno(405,78);
    echo $resultado;
    echo '<br>';
    echo 'a área do terreno é ' . calcularAreaTerreno(45, 78);


    ?>
</body>

</html>