<!DOCTYPE html>

<html lang="PT-BT">

<head>
    <meta charset="UTF-8">
    <title>Números da sorte para a Silvana</title>
</head>

<body style="background-color: yellow; font-family:'Courier New', Courier, monospace;">
    <h1 style="text-align: center;">Gerador de Número da Sorta para a Silvana</h1>
    <img src="https://stc.ofuxico.com.br/img/upload/noticias/2020/09/23/silvana-e-flagrada-por-caio-em-mesa-de-poquer_386408_36.jpg" style="width: 30%; height:30%; margin-top: 10%; margin-left: 8%;">
    <h2 style="margin-left: 40%; margin-top: -18%;"><?php
        $vetor[] = "";
        for ($i = 0; $i <= 5; $i++) {
            $vetor[$i] = rand(1, 60);
        }
        if ($vetor[0] == $vetor[1] or $vetor[2] or $vetor[3] or $vetor[4] or $vetor[5]) {
            $vrand[0] = rand(1, 60);
        }
        if ($vetor[1] == $vetor[0] or $vetor[2] or $vetor[3] or $vetor[4] or $vetor[5]) {
            $vrand[1] = rand(1, 60);
        }
        if ($vetor[2] ==$vetor[0] or $vetor[1] or $vetor[3] or $vetor[4] or $vetor[5]) {
            $vrand[2] = rand(1, 60);
        }
        if ($vetor[3] == $vetor[0] or $vetor[1] or $vetor[2] or $vetor[4] or $vetor[5]) {
            $vrand[3] = rand(1, 60);
        }
        if ($vetor[4] == $vetor[0] or $vetor[1] or $vetor[2] or $vetor[3] or $vetor[5]) {
            $vrand[4] = rand(1, 60);
        }
        if ($vetor[5] == $vetor[0] or $vetor[1] or $vetor[2] or $vetor[3] or $vetor[4]) {
            $vrand[5] = rand(1, 60);
        }
        sort($vetor);

        echo "Silvana seus números da sorte são <br > $vetor[0] $vetor[1] $vetor[2] $vetor[3] $vetor[4] $vetor[5], não conte ao Eurico";
        ?>
    </h2>

</body>

</html>