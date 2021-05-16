<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Clima</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }
</style>

<body>

    <form action="index.php" method="GET">
        <input type="text" name="campo_cidade"> <br />
        <input type="submit">
    </form>

    <h1><?= $nome ?></h1>
    <p><b>Temperatura: </b><?= $temperatura ?></p>
    <p><b>Sensação: </b><?= $sensacao ?></p>
    <p><b>Umidade: </b><?= $umidade ?></p>
    <p><b>Velocidade do vento: </b><?= $velocidade ?></p>

</body>

</html>