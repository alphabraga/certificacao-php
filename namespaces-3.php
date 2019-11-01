<?php


/* 
	criei um namespace Vendas\Operadora 
	e dentro dele defini uma constante e uma função

*/
namespace Vendas\Operadora {

	const QUILOMETRAGEM = 7;
	
	function f() { 

		echo __FUNCTION__."\n"; 

	}
}


/* 
	Nesse outro namespace posso referenciar
	essa constante e essa função fazendo utilizando
	a palavra `use` que antes era utilizada apenas para
	referenciar classes e outros namespaces
*/
namespace {

	use const Vendas\Operadora\QUILOMETRAGEM;

	use function Vendas\Operadora\f;

	echo QUILOMETRAGEM . PHP_EOL;

	f();
}