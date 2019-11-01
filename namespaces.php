<?php

namespace biblioteca;


function count($param = null){

	echo "Processando";

	echo PHP_EOL;
}

//Assim chama a função que eu criei
echo count();

//Assim tambem, já que estou chamando pela referencia completa
echo \biblioteca\count();

echo \count([]);