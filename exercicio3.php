<?php
    print"digite o salário: ";
    $salario = (float) fgets(STDIN);
    print"digite a porcentagem de aumentos: ";
    $porcentagem = (int) fgets(STDIN);

    $porcentagem_de_aumento = $porcentagem/100;
    $aumento = $salario*$porcentagem_de_aumento;
    $salario_atual = $salario+$aumento;

    print"o salário atual dele é $salario_atual com um aumento de $porcentagem%\n\n";
    