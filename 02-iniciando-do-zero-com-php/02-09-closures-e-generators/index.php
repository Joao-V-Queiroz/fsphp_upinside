<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

//calculo simples de idade, feito com php
$myAge = function ($year) {
	$age = date("Y") - $year; #ano atual, menos o ano informado
	return "<p>Você tem {$age} anos!</p>";
};

// array simples para informar funcionários de uma empresa
$grupoTrabalho = [
	"Desenvolvedor Sr" => "Fagner Santos",
	"Gestor de T.I" => "Luciano Brunes",
	"Desenvolvedor Pleno" => "Renato",
	"Desenvolvedor Jr" => "João Victor",
];

//atribuir idade ao grupo de trabalho
foreach ($grupoTrabalho as $key => $nome) {
	if ($key == "Desenvolvedor Sr") {
		$idade = $myAge(1988);
		echo "<p>{$nome} {$idade}</p>";
	} elseif ($key ==  "Gestor de T.I") {
		$idade =  $myAge(1992);
		echo "<p>{$nome} {$idade}</p>";
	} elseif ($key == "Desenvolvedor Pleno") {
		$idade = $myAge(1990);
		echo "<p>{$nome} {$idade}</p>";
	} elseif ($key == "Desenvolvedor Jr") {
		$idade = $myAge(1998);
		echo "<p>{$nome} {$idade}</p>";
	} else {
		echo "<p>Colaborador não encontrado</p>";
	}
}

/* 
Exercício: Filtrar e Manipular uma Lista de Produtos
Imagine que você tem uma lista de produtos, cada um com um nome e um preço. Seu objetivo é:

Filtrar os produtos com preço superior a R$ 50.
Aplicar um desconto de 10% em todos os produtos filtrados.
Exibir o nome e o preço final dos produtos que atendem aos critérios acima.
*/

// Closure para formatar preço em BRL
$formatBrl = function ($price) {
	return number_format($price, 2, ",", ".");
};

$produtos = [
	["nome" => "Bola de Futebol", "preço" => 20],
	["nome" => "Chuteira", "preço" => 250],
	["nome" => "Meião", "preço" => 30],
	["nome" => "Uniforme", "preço" => 300],
	["nome" => "Garrafa d'água", "preço" => 40],
];

// Iterar sobre os produtos e aplicar desconto se o preço for superior a R$50
foreach ($produtos as $produto) {
	if ($produto["preço"] > 50) {
		$produtoNome = $produto["nome"];
		$precoOriginal = $produto["preço"];
		$desconto = $precoOriginal * 0.9; // Aplica 10% de desconto

		// Formatar os preços para exibição
		$precoFormatado = $formatBrl($precoOriginal);
		$precoComDescontoFormatado = $formatBrl($desconto);

		echo "<p>O(a) $produtoNome tem o preço original de R$$precoFormatado, superior a R$50,00.</p>";
		echo "<p>Com o desconto, o(a) $produtoNome custará R$$precoComDescontoFormatado</p>";
	}
}

//vamos montar um carrinho de compras
$myCart = [];
$myCart["totalPrice"] = 0;
$cardAdd = function ($item, $qtd, $price) use (&$myCart) {
	$myCart[$item] = $qtd * $price;
	$myCart["totalPrice"] += $myCart[$item];
};

$cardAdd("HTML5", 1, 497);
$cardAdd("JQuery", 2, 280);
var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);
$iterator = 400;

//função que retorna um array com as datas dos próximos dias
function showDates($days){
	$saveDate = [];
	for($day = 1; $day < $days; $day++){
		$saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
	}
	return $saveDate;
}

//função que retorna um generator com as datas dos próximos dias
echo "<div style='text-align: center'>";
foreach(showDates($iterator) as $date){
	echo "<small class='tag'>{$date}</small>" . PHP_EOL; //PHP_EOL = PHP End Of Line
}
echo "</div>";

//função que retorna um generator com as datas dos próximos dias
function generatorDates($days){
	for($day = 1; $day < $days; $day++){
		yield date("d/m/Y", strtotime("+{$day}days")); //yield é uma palavra reservada do php que retorna um valor, mas não encerra a função
	}
}