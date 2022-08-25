<?php
    $a = 10;
    $b = 20;
    // operadores de atribuição simplificados:

    $a += $b;   //adição 
    $a -= $b;   //subtração
    $a *= $b;   //multiplicação
    $a /= $b;   //divisão
    $a %= $b;   //módulo
    $a .= $b;   //concatenação

    // operadores de incremento:
    
    //incrementa antes da utilização:
    ++$a;
    //incrementa depois da utilização:
    $a++;
    //decrementa antes da utilização:
    --$a;
    //decrementa depois da utilização:
    $a--;

    //variáveis de referência:
    $a = 10;
    $b = &$a;
    $b += 20;
    echo "b: $b\n";
    echo "a: $a\n";
?>