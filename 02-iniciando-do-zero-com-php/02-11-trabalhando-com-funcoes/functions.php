<?php

function functionNameRandom($name1, $name2, $name3)
{
	$groupNames = [$name1, $name2, $name3];
	return $groupNames;
}

// o argumento não obrigatório, deve ser o último, e deve ser nulo
function functionPlayerGame($name1, $name2, $name3, ?stdClass $teams = null): array
{
	if ($teams) {
		return [
			'teamName' => "O jogador é do time {$teams->name}",
			'teamLeague' => "O time pertence à liga {$teams->league}",
			'teamCountry' => "A Liga pertence ao país {$teams->country}",
		];
	}

	return [
		'player1' => $name1,
		'player2' => $name2,
		'player3' => $name3,
	];
}

// função que aceita argumentos globais
function calcImcGlobalArgs()
{
	global $weight;
	global $height;
	$total = $weight / ($height ** 2);
	if ($total < 18.5) {
		$formatTotal = number_format($total, 2, ',', '.');
		$texto = "<p>Abaixo do Peso, valor do IMC: " . $formatTotal . "</p>";
		return $texto;
	} elseif ($total >= 18.5 && $total <= 24.9) {
		$formatTotal = number_format($total, 2, ',', '.');
		$texto = "<p>Peso normal, valor do IMC: " . $formatTotal . "</p>";
		return $texto;
	} elseif ($total >= 25 && $total <= 29.9) {
		$formatTotal = number_format($total, 2, ',', '.');
		$texto = "<p>Sobrepeso, valor do IMC: " . $formatTotal . "</p>";
		return $texto;
	} elseif ($total >= 30 && $total <= 34.9) {
		$formatTotal = number_format($total, 2, ',', '.');
		$texto = "<p>Obesidade grau 1, valor do IMC: " . $formatTotal . "</p>";
		return $texto;
	} elseif ($total >= 35 && $total <= 39.9) {
		$formatTotal = number_format($total, 2, ',', '.');
		$texto = "<p>Obesidade grau 2, valor do IMC: " . $formatTotal . "</p>";
		return $texto;
	} elseif ($total >= 40) {
		$formatTotal = number_format($total, 2, ',', '.');
		$texto = "<p>Obesidade grau 3, valor do IMC: " . $formatTotal . "</p>";
		return $texto;
	} else {
		$texto = "<p>Erro ao calcular o IMC</p>";
		return $texto;
	}
}

// função que aceita argumentos estáticos
function payTotal($price)
{
	static $total; // variável estática
	$total += $price;
	return "<p>O total a pagar é: R$ " . number_format($total, 2, ',', '.') . "</p>";
}

// função que aceita argumentos dinâmicos
function myTeamInfo()
{
	$teamNames = func_get_args(); // pega todos os argumentos
	$teamCount = func_num_args(); // pega a quantidade de argumentos
	return [
		'teamCount' => $teamCount,
		'teamNames' => $teamNames,
	];
}