<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);
$userFirstName = "João Victor"; # camelCase
$userLastName = "Queiroz Silva"; #camelCase
echo "<h3>{$userFirstName} {$userLastName}</h3>";

//use sempre apenas um padrão de escrita de variável
//tente sempre usar variáveis escritas em inglês 

$user_first_name = $userFirstName; #underscore
$user_last_name = $userLastName; #underscore
echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = 26; #camelCase, variável tipo inteiro
echo "<p>{$userFirstName} {$userLastName} <span class='tag'>tem {$userAge} anos</span></p>";

//sempre criar as variáveis, antes de usá-las, php segue uma linha sequencial
$userEmail = "<p>joaovsq@hotmail.com</p>";
echo $userEmail;

//variável variável
$company = "UpInside";
$$company = "Treinamentos";
echo "<h3>{$company} {$UpInside}</h3>"; #definindo o valor da variável $company como o valor da variável $UpInside

$calcA = 10;
$calcB = 20;
// $calcB = $calcA;
$calcB = &$calcA; #referenciando a variável $calcA na variável $calcB, ambas terão o mesmo valor
$calcB = 50;
var_dump([
	"a" => $calcA,
	"b" => $calcB,
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;
var_dump($true, $false);

$bestAge = ($userAge > 30);
var_dump($bestAge);

$a = 0;
$b = 0.0;
$c = "";
$d = [];
$e = null;

//todos esses valores são considerados falsos, pois são valores vazios
var_dump($a, $b, $c, $d, $e);
if ($a || $b || $c || $d || $e) {
	var_dump(true);
} else {
	var_dump(false);
}

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Function!</h1></article>"; #variável com uma string html
$codeClear = call_user_func("strip_tags", $code); #função que remove as tags html da string
var_dump($code, $codeClear);

$codeMore = function ($code){
	var_dump($code);
};
$codeMore("Mais um callback");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá Mundo!";
$array = [$string];
$object = new StdClass();
$object->hello = $string;
$null = null;
$int = 1;
$float = 1.1;

var_dump([
	"string" => $string,
	"array" => $array,
	"object" => $object,
	"null" => $null,
	"int" => $int,
	"float" => $float,
]);