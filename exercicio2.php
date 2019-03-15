<?php
    print"digite a quantidade de dias";
    $dias= fgets(STDIN);
    print"digite a quantidade de horas";
    $horas= fgets(STDIN);
    print"digite a quantidade de minutos";
    $minutos= fgets(STDIN);
    print"digite a quantidade de segundos";
    $segundos= fgets(STDIN);
    
    $dias1 = $dias *86400;
    $horas1 = $horas *3600;
    $minutos1 = $minutos *60;

    $total = $dias1 + $horas1 + $minutos1 + $segundos;
     print"o total foi de $total segundos";