<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);
//Lembrar sempre de usar aspas duplas para o echo funcionar corretamente
//usar sempre ; no final de cada comando
//sempre que abrir uma tag html, lembrar de fechar
echo "<h3>Olá Mundo!</h3>";
//pode ter tanto um, como vários parâmetros para compor o echo
echo "<p>Olá Mundo!", " ", "<span class='tag'>#BoraProgramar!</span>", "</p>";
$hello = "Olá Mundo!"; #variável
$code = "<span class='tag'>#BoraProgramar!</span>"; #variável
//se for entre aspas simples, irá mostrar o nome da variável
echo "<p>$hello</p>";

$day = "dia";
echo "<p>Falta 1 $day para o evento!</p>";
echo "<p>Faltam 2 {$day}s para o evento!</p>"; #variável protegida com chaves

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";

//caso você não queira proteger a variável com chaves, você pode concatenar
echo "<h3>" . $hello . " " . $code . "</h3>";
?>

<h4><?= $hello; ?> <?= $code; ?></h4> <!-- forma reduzida de echo -->

<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

//não aceita múltiplos parâmetros, podemos fazer o mesmo que o echo, mas, sem vírgulas
print $hello;
print $code;

print "<h3>{$hello} {$code}</h3>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

//usado para exibir vetores e arrays
$array = [
	"company" => "UpInside",
	"course" => "FSPHP",
	"class" => "Comandos de saída"
];

#echo $array; #não funciona, pois não é uma string
print_r($array); #exibe o array
echo "<pre>", print_r($array, true),  "</pre>"; #exibe o array de forma mais organizada

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

//usado para formatar a saída
$article = "<article><h1>%s</h1><p>%s</p></article>"; #%s é o marcador de string, onde será substituído
$title = "{$hello} {$code}";
$subtitle = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
printf($article, $title, $subtitle);
sprintf($article, $title, $subtitle); #não exibe, apenas formata
echo sprintf($article, $title, $subtitle); #exibe o resultado

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

//faz o mesmo que o printf, mas, com arrays

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>%s</b></p></article>";
vprintf($company, $array); #exibe o resultado
vsprintf($company, $array); #não exibe, apenas formata

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

//usado para debugar variáveis
// var_dump($array); #exibe o array e o tipo de dado
var_dump($array, $hello, $code); #exibe o array e as variáveis