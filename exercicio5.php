<?php   
    print"digite a distância em km/h: ";
    $distancia= fgets(STDIN);
    print"digite a velocidade média em km/h: ";
    $velocidade_media=fgets(STDIN);

    $tempo = $velocidade_media/ $distancia;

    print"o tempo da viagem foi de $tempo horas \n\n";