<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Fake News</title>
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

    h1 {
        text-align: center;
        color: brown;
        margin-top: 5%;
    }
</style>

<body>

    <form action="index.php" method="GET">
        <div class="campo">
            <label for="dia">Dia de nascimento:</label>
            <input type="text" name="dia">

            <label for="mes">Mês de nascimento:</label>
            <input type="text" name="mes">

            <label for="ano">Ano de nascimento:</label>
            <input type="text" name="ano">


            <input type="submit">
        </div>
    </form>
<h1><?php print "$somatorio; <br>"; print $anjo?></h1>

</body>

</html>