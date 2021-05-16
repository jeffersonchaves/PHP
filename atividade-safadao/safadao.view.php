<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Teste % Safadão</title>
</head>
<style>
        body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }

    .campo {
        padding-right: 50px;
        margin-top: 5%;
        text-align: center;
        font-weight: bold;
    }

</style>
<body>
    <h1> Preencha os campos abaixo: </h1>
    
    <form class="campo" action="index.php" method="GET">
        <label><b>Dia de nascimento</b></label>
        <input type="number" name="dia">
        <label><b>Mês de nascimento (em número)</b></label>
        <input type="number" name="mes">
        <label><b>Ano de nascimento:</b></label>
        <input type="number" name="ano">
        <input type="submit">
    </form>
    <h2><?php echo safadeza($dia, $mes, $ano);?></h2>
</body>
</html>