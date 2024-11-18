<?php

use Source\MyCLass;

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.12 - Constantes e constantes mágicas");

/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);
// existem duas formas de se definir uma constante 
define("COURSE", "Full Stack PHP");
const AUTHOR = "Robson";

$formation = true;
//não conseguiriamos fazer isso com const, pois apenas define, roda em tempo de execução
if($formation){
	define("COURSE_TYPE", "Formação");
}else{
	define("COURSE_TYPE", "Curso");
}

echo "<p>". COURSE_TYPE . " " . COURSE . " de " . AUTHOR . "</p>"; //COMO MOSTRAR UMA CONSTANTE

class Config
{
	//usar define, para definir configurações, dentro de classes usar const
	const USER = "root";
	const HOST ="localhost";
}

//mostrando constantes decladas dentro de uma classe
echo "<p>" . Config::HOST . "</p>";
echo "<p>" . Config::USER . "</p>";

// var_dump(get_defined_constants(true)); //pegando o valor de todas as constantes 

/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);
//constante máginas são aquelas que possuem prefixo de __ e sufico também com __
var_dump([
	__LINE__,
	__FILE__,
	__DIR__
]);

function fullStackPHP()
{
	return __FUNCTION__; // retorna o nome da função que estamos usando
}

var_dump(fullStackPHP());

trait MyTrait
{
	public $traitName = __TRAIT__;
}

class FsPHP
{
   use MyTrait;
   public $className = __CLASS__;
}

var_dump(new FsPHP);

require __DIR__ . "/MyClass.php";
var_dump(MyCLass::class);