<?php

    $nomes = array("Odair", "Panizzi", "Júnior"); //Declaração de array

echo "<br>";

    echo is_array($nomes); //Função que questiona se é um Array.

echo "<br>";

    var_dump(is_array($nomes)); //É uma função básica que retorna uma string e, dentro dela, imprime os valores da raça e do nome deste objeto que está instanciado

echo "<br>";

    if (is_array($nomes)): //Condição que imprime se é ou não um Array.
        echo "é um array";
    else:
        echo "não é um array";
    endif;

echo "<br>";

    echo in_array("Odair", $nomes); //Verifica se um determinado valor existe em alguma posição do Array.

echo "<br>";

    if (in_array("Odair", $nomes)): //se Odair estiver em Array NOMES vai dizer que existe!
        echo "Existe";
    else:
        echo "Não existe";
    endif;

echo "<br>";