<?php

// CONSTANTES - identificador para valor único

define("NOME", "Odair Jr");
define("IDADE", 23);
define("ALTURA", 1.89);
define("CASADO", false);

var_dump(NOME);
var_dump(IDADE);
var_dump(ALTURA);
var_dump(CASADO);

echo NOME;
echo "<br>";
echo IDADE;
echo "<br>";
echo ALTURA;
echo "<br>";
echo CASADO;

echo "<br>";
echo "<br>";
echo "Meu nome é ".NOME. " e minha idade é ".IDADE;


define("TIMES", ['Inter', 'Grêmio']);
echo "<br>";
echo TIMES[0];
echo "<br>";
echo TIMES[1];
var_dump(TIMES);
echo "<br>";
echo "<br>";
echo "<br>";

function exibeNome(){
	echo NOME;
}

	exibeNome();
	echo "<hr>";


// Esse valor não se altera durante a execução do script

// Por convenção os Identificadores de uma constante são semper em letras MAIÚSCULAS.

//As constantes são globais, ou seja. Podem ser usadas em todo script