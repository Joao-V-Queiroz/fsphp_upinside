<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);
$operatorA = 5;
$operators = [
	"a += 5" => ($operatorA += 5), # operador de atribuição de adição
	"a -= 5" => ($operatorA -= 5), # operador de atribuição de subtração
	"a *= 5" => ($operatorA *= 5), # operador de atribuição de multiplicação
	"a /= 5" => ($operatorA /= 5), # operador de atribuição de divisão
	"a %= 5" => ($operatorA %= 5), # operador de atribuição de módulo
];
var_dump($operators);

$incrementA = 5;
$incrementB = 5;
$increment = [
	"pós-incremento" => $incrementA++, # incrementa após a execução
	"res-incremento" => $incrementA, # resultado do incremento
	"pré-incremento" => ++$incrementB, # incrementa antes da execução
	"pós-decremento" => $incrementB--, # decrementa após a execução
	"res-decremento" => $incrementB, # resultado do decremento
	"pré-decremento" => --$incrementA, # decrementa antes da execução
];
var_dump($increment);

/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$relatedA = 5;
$relatedB = "5";
$relatecC = 10;
$related = [
	"a == b" => ($relatedA == $relatedB), # a é igual a b?
	"a === b" => ($relatedA === $relatedB), # a é idêntico a b? Não, pois um é int e o outro é string
	"a != b" => ($relatedA != $relatedB), # a é diferente de b? Não
	"a !== b" => ($relatedA !== $relatedB), # a é totalmente diferente de b? Sim, pois um é int e o outro é string
	"a > c" => ($relatedA > $relatecC), # a é maior que c? Não
	"a < c" => ($relatedA < $relatecC), # a é menor que c? Sim
	"a >= b" => ($relatedA >= $relatedB), # a é maior ou igual a b? Sim
	"a <= b" => ($relatedA <= $relatedB), # a é menor ou igual a b? Sim
	"a <= c" => ($relatedA <= $relatecC), # a é menor ou igual a c? Sim
];
var_dump($related);

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;
$logic = [
   "a && b" => ($logicA && $logicB), # a e b existem? Não
   "a || b" => ($logicA || $logicB), # a ou b existem? Sim
   "a" => ($logicA), # a existe? Sim
   "!a" => (!$logicA), # a não existe? Não
   "!b" => (!$logicB), # b não existe? Sim
];
var_dump($logic);


/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

//servem para fazer cálculos matemáticos
$calcA = 5;
$calcB = 10;
$calc = [
	"a + b" => ($calcA + $calcB), # soma
	"a - b" => ($calcA - $calcB), # subtração
	"a * b" => ($calcA * $calcB), # multiplicação
	"a / b" => ($calcA / $calcB), # divisão
	"a % b" => ($calcA % $calcB), # módulo ou resto da divisão
	"a ** b" => ($calcA ** $calcB), # exponenciação
];
var_dump($calc);