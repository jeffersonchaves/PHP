<!DOCTYPE html>

<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <title>Qual é o seu nome de viajante</title>
</head>

<body style="background-color:aqua; text-align:center;">
    <h1 style="margin-top:15%; font-size: 40px; color:yellow">
Qual é o seu nome <div style="color:orange; font-weight:bold;">de viajante?</div>
            
    </h1>
    <h3 style="color: #fff;"><?php
        $vetorMes = array("Planejador(a) de roteiro", "Farofeiro(a)", "Viajante", "Louco das promoções de passagens", " Hipster", "Aventureiro(a)", "Turistão/Turistona", "Fotógrafo(a)", "Mochileiro(a)", "Amigão/Amigona", "Explorador(a)", "Consumista");
        $vetorAniversario = array("que se perde toda vez", "que controla os gastos da galera", "da excursão da terceira idade", "da quebrada", "que leva açai", "do rolê", "que ama souvenir", "gourmet", "que não quer voltar para casa", "dos destinos nacionais", "que senta na janelinha", "do hotel cinco estrelas");
        $numeroMes = rand(0, 11);
        $numeroAniversario = rand(0, 11);

        echo "$vetorMes[$numeroMes], $vetorAniversario[$numeroAniversario]";
        ?></h3>
</body>

</html>