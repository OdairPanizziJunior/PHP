<?php

//ARRAYS NUMÉRICOS

$carros = array("BMW", "Veloster", "Hilux");
print_r($carros);
echo "<br>";
echo $carros[2];
//Resultado: Hilix


//array quando eu defino a posiçaõ do indice:
echo "<br>";

$carros = array(2=>"BMW", 1=>"Veloster", 0=>"Hilux");
print_r($carros);
echo "<br>";
echo $carros[2];
//Resultado: BMW

//array quando insiro um elemento:
$carros[] = "Amarok";
echo "<br>";
print_r($carros);
//Resultado: Amarok vai automaticamente para indice 3 


//array quando insiro um elemento aonde eu quero
$carros[7] = "Gol";
echo "<br>";
print_r($carros);
//Resultado: Gol vai para indice 7
echo "<br>";
var_dump($carros);


//Outra forma de criar array:

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Susuki";
$motos[] = "Kawasaki";
$motos[6] = "Honda"; //coloquei no indice 6

print_r ($motos);
echo "<br>";

//Outra forma de criar array 2:

$clientes = ["Odair", "Rodrigo", "Pedro"];
echo $clientes[0];
echo "<br>";
//Exibir q quantidade de elementos de um array

echo count($clientes);
echo "<br>";
echo "<br>";

$total = count($clientes);
echo $total;
echo "<br>";


//loop para percorrer arrays (como se fosse uma lista)
foreach ($carros as $valor) {
	echo $valor;
	echo "<br>";
}

echo "<hr>";

foreach($carros as $index => $lista){
	echo $index." :".$lista."<br>";
}

echo "<hr>";
echo "<hr>";
echo "<hr>";

//ARRAYS ASSOCIATIVOS
//quando indices são strings

$pessoa = array("nome"=> "Odair", "idade"=> 32, "altura"=> 1.70);

$pessoa["cidade"] = "Limerick";

echo $pessoa["nome"];
echo "<br>";
print_r($pessoa);
echo "<br>";

foreach($pessoa as $list){
	echo $list;
	echo "<br>";
}


echo "<br>";
echo "<br>";


foreach($pessoa as $indice => $list ){
	echo $indice.": ".$list ."...... ->OK"."<br>";
}


//ARRAYS MULTIDIMENSIONAIS
//Contém um ou mais arrays

$times = array(
	"cariocas" => array("Campeão"=>"Vasco", "Vice"=>"Flamengo", "Terceiro"=>"Botafogo"),
	"paulistas" => array("Campeão"=>"Santos", "Vice"=>"Corinthians", "Terceiro"=>"Palmeiras"),
	"gauchos" => array("Campeão"=>"Grêmio", "Vice"=>"Internacional", "Terceiro"=>"Juventude")
	);

//echo $times["paulistas"][1];
echo "<hr>";

foreach($times["cariocas"] as $titulo => $clube){
	echo $titulo.": ".$clube."<br>";
}
echo "<hr>";	
foreach($times["paulistas"] as $titulo => $clube){
	echo $titulo.": ".$clube."<br>";
}
echo "<hr>";	
foreach($times["gauchos"] as $titulo => $clube){
	echo $titulo.": ".$clube."<br>";
}