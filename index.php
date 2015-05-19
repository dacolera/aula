<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use Classes\Carro;
use Classes\Motor2L;
use Classes\CarroceriaVolkswagen;
use Classes\RodaMomo;
use Classes\Interfaces\iCarroceria;

//rodas
$rodas = new RodaMomo();
$rodas
	->setSize(20)
	->calibrar(28);

//carroceria
$carroceria = new CarroceriaVolkswagen();
$carroceria
	->setPortas(4)
	->setType(iCarroceria::HATCH)
	->setRodas($rodas);


$golGti = new Carro( new Motor2L(), $carroceria);

var_dump($golGti);
