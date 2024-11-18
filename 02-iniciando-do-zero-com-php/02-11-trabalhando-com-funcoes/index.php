<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);
// requisição de arquivos, para usar função 
require __DIR__ . "/functions.php";
//se não definirmos os argumentos, teremos um erro
var_dump(functionNameRandom("Roberto", "Maria", "José"));
var_dump(functionNameRandom("Fagner", "Luciano", "Fabiano"));

// Exemplo de jogadores e times
$players = [
	['John', 'Paul', 'George'],
	['Jane', 'Alice', 'Maria'],
	['Carlos', 'Pedro', 'José']
];

$teams = [
	(object)['name' => 'Warriors', 'league' => 'NBA', 'country' => 'USA'],
	(object)['name' => 'Flamengo', 'league' => 'Brasileirão', 'country' => 'Brasil'],
	(object)['name' => 'Manchester United', 'league' => 'Premier League', 'country' => 'Inglaterra']
];

// Processar jogadores e times
foreach ($players as $index => $playerGroup) {
	$team = $teams[$index] ?? null; // Pega o time correspondente, se existir
	// Chamar a função
	$result = functionPlayerGame($playerGroup[0], $playerGroup[1], $playerGroup[2], $team);

	// Exibir os resultados
	echo "<h3>Resultado do Grupo " . ($index + 1) . ":</h3>";
	// Exibir o nome do jogador
	echo "<p>Jogador se chama " . $playerGroup[$index] . "</p>";
	foreach ($result as $info) {
		echo "<p>{$info}</p>";
	}
}

var_dump(functionPlayerGame("Roberto", "Maria", "José")); // Sem time

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);
$weight = 75;
$height = 1.74;
echo calcImcGlobalArgs();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);
$pay = payTotal(100);
$pay = payTotal(300);
echo $pay;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);
var_dump(myTeamInfo("João Victor", "Luciano", "Fagner", "Renato")); // 4 argumentos

$team = ["João Victor", "Luciano", "Fagner", "Renato"];
var_dump(myTeamInfo($team)); // passando um array
