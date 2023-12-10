<?php

/****** Escalares ******/

// String

$nome = "true";
var_dump($nome); //verificar toda a variável

if(is_string($nome)):
	echo "É uma String";
else:
	echo "Não é uma String";
endif;
echo "<hr>";


// INT

$idade = 27;
var_dump($idade);
if(is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;
echo"<hr>";


// FLOAT

$altura = 1.77;
var_dump($altura);
if(is_float($altura)):
	echo "É um Float";
else:
	echo "Não é um Float";
endif;
echo"<hr>";


// BOOLEAN

$admin = false;
var_dump($admin);
if(is_bool($admin)):
	echo "É um Booleano";
else:
	echo "Não é um Booleano";
endif;
echo"<hr>";


/****** Compostos ******/

//ARRAY

$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
if(is_array($carros)):
	echo "É um Array";
else:
	echo "Não é um Array";
endif;
echo"<hr>";

//OBJECT

class Cliente {
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;

	} 
}

$cliente = new cliente();
$cliente -> atribuirNome("Odair");
var_dump($cliente);

if(is_object($cliente)):
	echo "É um Objeto";
else:
	echo "Não é um Objeto";
endif;
echo"<hr>";

/****** Especiais ******/

//NULL

$cidade = null;
var_dump($cidade);

//Resource (faz conexão com banco de dados)