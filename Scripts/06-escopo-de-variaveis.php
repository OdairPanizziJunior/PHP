<?php


//ESCOPO GLOBAL

// É o contexto aonde ela foi definida

$nome = "Odair Jr";
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
	global $nome;
	echo $nome;
}

	exibeNome();
	echo "<hr>";

//////////////////////////////////////////


//ESCOPO LOCAL
function exibeCidade(){
	global $cidade;
	$cidade = "Rio de Janeiro";
}

	exibeCidade();
	echo $cidade;
	echo "<hr>";

	//////////////////////////////////////////

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

	soma();
	echo "<hr>";

///// outra forma

function soma2(){
	global $a;
	global $b;
	global $c;
	echo $a + $b + $c;
}
soma2();