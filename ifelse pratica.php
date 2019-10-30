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

    $possui_cartao = false;
    $valor_compra = 426.89;
    $valor_frete = 78;
    $teve_desconto = false;

    if ($possui_cartao && $valor_compra >= 400) {
        $valor_frete = 0;
        $teve_desconto = true;
    } else if ($possui_cartao && $valor_compra >= 300) {
        $valor_frete *= 0.1;
        $teve_desconto = true;
    } else if ($possui_cartao && $valor_compra >= 200) {
        $valor_frete *= 0.2;
        $teve_desconto = true;
    } else if ($possui_cartao && $valor_compra >= 100) {
        $valor_frete *= 0.5;
        $teve_desconto = true;
    }

    ?>

    <h1>Detalhes do pedido</h1>

    <p>
        Possuí cartão da loja?
        <?= $possui_cartao? 'Sim' : 'Não' ?>

    </p>

    <p>
        Valor da compra
        <?= "R$ $valor_compra" ?>
    </p>

    <p>
        Valor do frete
        <?= "R$ $valor_frete" ?>
    </p>

    <p>
        Teve Desconto?
       <?= $teve_desconto? 'Sim' : 'Não' ?>

    </p>

</body>

</html>