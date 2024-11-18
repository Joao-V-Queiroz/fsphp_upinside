<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);
// include, representa algo que você vai incluir, mas, que não é de fato necessário para a aplicação, como uma configuração, por exemplo. 
include __DIR__ . "/header.php"; 

$profile = new stdClass(); //objeto dinamico, orientação a objetos
$profile->name = "Robson";
$profile->company = "UpInside";
$profile->email = "cursos@upinside.com.br";
include __DIR__ . "/profile.php";

$profile = new stdClass(); //objeto dinamico, orientação a objetos
$profile->name = "Kaue";
$profile->company = "UpInside";
$profile->email = "cursos@upinside.com.br";
include __DIR__ . "/profile.php"; // se colocarmos once ... estamos dizendo para o php, se ainda não incluiu o arquivo, faça agora. Se quiser incluir mais de uma vez, coloque sem o once.
/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);

require __DIR__ . "/config.php";
echo "<h1>" . COURSE . "</h1>"; // Como é uma constante, obrigatoriamente se deve concatenarm ele não lê uma constante entre aspas.
require_once __DIR__ . "/config.php"; //neste caso tem que ser once, por que, recursos e configurações não podem ser repetidos. 
