<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = false;
if ($test) {
	var_dump(true);
} else {
	var_dump(false);
}

$age = 15;
if ($age < 20) {
	var_dump("Atleta em início de carreira!");
} elseif ($age > 20 && $age < 30) {
	var_dump("Atleta no auge da carreira");
} elseif ($age > 30 && $age <= 40) {
	var_dump("Atleta em fim de carreira");
} else {
	var_dump("Atleta Aposentado");
}

$hour = 23;
//pipe ||
if ($hour >= 5 && $hour < 23) {
	if ($hour < 7) {
		var_dump("Bob Marley");
	} else {
		var_dump("After Bridge");
	}
} else {
	var_dump("ZZZZzzzzzzzZZZ");
}

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";

if (isset($rock)) {  //isset verifica se a variável realmente existe 
	var_dump("Rock And Roll!");
} else {
	var_dump("Die");
}

$rockAndRoll = "AC/DC";
if (!empty($rockAndRoll)) { //verifica se não existe
	var_dump("Rock Existe e toca {$rockAndRoll}");
} else {
	var_dump("Não existe ou não está tocando");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment = "completed";

switch ($payment) {
	case 'billet_printed':
		var_dump("Boleto Impresso!");
		break;
	case 'canceled':
		var_dump("Pagamento Cancelado!");
		break;
	case 'past_due':
	case 'pending':
		var_dump("Aguardando Pagamento!");
		break;
	case 'approved':
	case 'completed':
		var_dump("Pagamento Aprovado com Sucesso!");
		break;
	default:
		var_dump("Erro ao processar pagamento!");
		break;
}
