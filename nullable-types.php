<?php


class Pessoa
{


	public string $nome;


	public function getNome(): string{

		return $this->nome;
	}

}

$alfredo = new Pessoa();

//$alfredo->nome = 'Alfredo';

echo $alfredo->getNome();