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
            <label for="nome">Primeira letra do seu nome:</label>
            <input type="text" name="letra">

            <label for="nome">Mês de nascimento:</label>
            <input type="text" name="mes">

            <label for="nome">Dia de nascimento:</label>
            <input type="text" name="dia">


            <input type="submit">
        </div>
    </form>
    <h1><?php print "$vetor1[$letra] $vetor2[$mes] $vetor3[$dia]"; ?></h1>

</body>

</html>