<?php
    print"digite o preço da mercadoria: ";
    $preço_mercadoria = fgets(STDIN);
    print"digite a porcentagem de desconto: ";
    $desconto = fgets(STDIN);

    $porcentagem_de_desconto= $desconto/100;
    $porcentagem= $preço_mercadoria*$porcentagem_de_desconto;
    $preço_atual= $preço_mercadoria-$porcentagem;

    print"o preço da mercadoria é de $preço_atual com um desconto de $porcentagem reais\n\n";

