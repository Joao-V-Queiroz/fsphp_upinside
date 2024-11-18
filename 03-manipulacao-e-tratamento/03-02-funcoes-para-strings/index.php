<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);
/*
   Qual a diferença entre uma string comum e um multibyte?
   O php é uma linguagem desenvolvida com base no inglês, 
   portanto, não existem para eles caracteres especiais, desta forma
   para levá-los em consideração, seja na hora de contar a quantidade de caracteres
   ou ainda de substituí-los, é necessário o uso do mb
*/
$string = "O último show do AC/DC foi incrível!";

var_dump([
	"string" => $string,
	"strlen" => strlen($string), //retorna o valor da string, contando com os ascentos, ou seja, como se não fizessem parte da palavra em si
	"mb_strlen" => mb_strlen($string), // ignora os caracteres especiais, mostrando que eles fazem sim parte da palavra
	"substr" => substr($string, "9"),
	"mb_substr" => mb_substr($string, "9"),
	"strtoupper" => strtoupper($string),
	"mb_strtoupper" => mb_strtoupper($string), // desta forma, todas as letras até aquelas que possuem ascentos, irão ser transformadas em caixa alta.
]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbString = $string;

var_dump([
	"mb_strtoupper" => mb_strtoupper($string),
	"mb_strtolower" => mb_strtolower($string), // transformando em caixa baixa
	"mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER), // Esta função, espera uma constante do php como parâmetro, mas, também converte
	"mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER), // para caixa alta ou baixa
	"mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE), // transforma a primeira letra de cada palavra em caixa alta
]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $string . " Fui, iria novamente, e foi épico!"; // adicionando uma nova string

var_dump([
   "mb_strlen" => mb_strlen($mbReplace), // contando a quantidade de caracteres
   "mb_strpos" => mb_strpos($mbReplace, ", "), // retorna a posição da string, usando ponteiros
   "mb_strrpos" => mb_strrpos($mbReplace, ", "), // retorna a última posição da string pesquisada
   "mb_substr" => mb_substr($mbReplace, 40 + 2, 14), // retorna a string a partir da posição 40, e pega 14 caracteres
   "mb_strstr" => mb_strstr($mbReplace, ", ", true), // retorna a string até a primeira ocorrência da string pesquisada, se o terceiro parâmetro for true
   "mb_strrchr" => mb_strrchr($mbReplace, ", ", true), // retorna a string até a última ocorrência da string pesquisada, se o terceiro parâmetro for true
]);

$mbReplace = $string; // voltando a string original
echo "<p>", $mbReplace, "</p>";
echo "<p>", str_replace("AC/DC", "Nirvana", $mbReplace), "</p>"; // substituindo uma string por outra
echo "<p>", str_replace(["AC/DC", "incrível"], ["Nirvana", "ÉPICO!!"], $mbReplace), "</p>"; // substituindo mais de uma string por outra

// utilizando delimitadores para substituir uma string
$article = <<<ROCK
   <article>
	  <h3>event</h3>
	  <p>desc</p>
   </article>
ROCK;
$articleData = [
	"event" => "Rock in Rio",
	"desc" => $mbReplace // substituindo a string original
];

echo str_replace(array_keys($articleData), array_values($articleData), $article); // substituindo as chaves pelos valores

/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);
// permite a troca de valores de uma string, por exemplo, de uma url
$endPoint = "name=Robson&email=cursos@upinside.com.br";
mb_parse_str($endPoint, $parseEndPoint); // transforma a string em um array, onde as chaves são os valores antes do sinal de igual, e os valores são os valores após o sinal de igual

var_dump([
   "endPoint" => $endPoint,
   "parseEndPoint" => $parseEndPoint, // array com os valores da string, poderia ser um objeto
   "objectEndPoint" => (object)$parseEndPoint // transformando o array em um objeto
]);