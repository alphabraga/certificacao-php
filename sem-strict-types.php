<?php


/*
	Abaixo são declaras das funcções e em cada uma das funcções é definido
	o tipo da variavel de retorno. O PHP atraves do type juggling vai converter
	para o tipo definido para retorno.

	Se a intrução declare(strict_types=1); for definida na primeira linha do script 
	o comportamento ira mudar. No momento de dar o return o PHP não podera fazer o 
	type juggling e ira disparar um fatal error.
*/


function obtemInteiro($valor) : int{

	return $valor;
}

function obtemFloat($valor) : float{

	return $valor;
}

function obtemString($valor) : string{

	return $valor;
}

function obtemBollean($valor) : bool{

	return $valor;
}

$valor = 7.5;

var_dump(obtemInteiro($valor)); // retorna 7
var_dump(obtemFloat($valor)); // retorna 7.5
var_dump(obtemString($valor)); // retorna "7.5"
var_dump(obtemBollean($valor)); // retorna true