<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <title>Lista de Pokemons</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            margin-left: 5%;
            margin-right: 5%;
        }
        .grid {
            width: 30%;
            min-width: 200px;
            height: 450px;
            border: solid 1px #777;
            position: relative;
            padding: 10px;
            margin-left: 5px;
            margin-bottom: 5px;
            float: left;
        }

        p {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        .grid h3 {
            text-align: center;
        }

        .imagem {
            width: 50%;
            height: 50%;
            margin-left: 25%;
            margin-right: 25%;
        }
    </style>

</head>

<body>

    <?php foreach ($pokemons as $pokemon) : ?>
        <div class="grid">
            <h3><?= $pokemon['nome'] ?></h3>
            <img class="imagem" src="<?= $pokemon['imagem'] ?>" alt="Pokemon <?= $pokemon['nome'] ?>">
            <p><b>Altura</b> <?= $pokemon['altura'] ?> cm.</p>
            <p><b>eso: </b><?= $pokemon['peso'] ?> grs.</p>
            <p><b>Habilidades:</b> </p>

            <ul>
                <?php foreach ($pokemon['habilidade'] as $hab) : ?>
                    <li><?= $hab['ability']['name'] ?></li>
                <?php endforeach; ?>
            </ul>

        </div> <!-- /.card  -->
    <?php endforeach; ?>
</body>

</html>