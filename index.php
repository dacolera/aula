<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use Classes\Factories\CarroFactory as Carro;
use Classes\Interfaces\iOpcional;
use Classes\Factories\CarroTopFactory as CarroTop;

//rodas

//carro sem opcionais
var_dump(Carro::build());

print '<hr>';

//primeira forma de criar o mesmo carro com 3 itens opcionais
$carroTop = Carro::build();
$carroTop
	->addOpcional(iOpcional::AR_CONDICIONADO)
	->addOpcional(iOpcional::DIRECAO_HIDRAULICA)
	->addOpcional(iOpcional::SOUND_SYSTEM);

var_dump($carroTop);	

print '<hr>';

//segunda forma de criar um carro top com todos os opcionais

var_dump(CarroTop::build());