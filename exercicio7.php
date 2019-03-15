<?php
    print"digite a quantidade de km percorridos: ";
    $km= (float) fgets(STDIN);
    print"digite a quantidade de dias que o carro foi alugado: ";
    $dias= (float) fgets(STDIN);
    
    $preço_dia = $dias *60;
    $preço_km = $km *0.15;

    $custototal = $preço_dia + $preço_km;

    print"o preço total foi de R$ $custototal";
