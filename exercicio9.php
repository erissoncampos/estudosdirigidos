<?php
    print"qual a área em m²  ser pintada?\n";
    $area = fgets (STDIN);
    $litro = $area/6;
    $lata = ceil(($litro/18)*1.10);
    $galao = ceil(($litro/3.6)*1.10);
    $compralatas = 80*$lata;
    $compragaloes = 25 *galao;
    $melhor_compra_latas = ceil($litro/18);
    $melhor_compra_galao = ceil(($litro%18)/3.6);
    $melhor_compra= ($melhor_compra_latas*80)+ceil($melhor_compra_galao*25);

    print"compra de latas:$lata latas ... preço $compralatas \n";
    print"compra de galões $galao: galões ... preço $compragaloes \n";
    print"compra cmpleta: latas $melhor_compra_latas, galões $melhor_compra_galao no preço de:$melhor_compra\n";
