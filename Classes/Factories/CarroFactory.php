<?php

namespace Classes\Factories;

use Classes\Abstracts\AbstractFactory;
use Classes\Carro;
use Classes\Motor2L;
use Classes\CarroceriaVolkswagen;
use Classes\RodaMomo;
use Classes\Interfaces\iCarroceria; 

class CarroFactory extends AbstractFactory {

	public static function build() {

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


		return new Carro(new Motor2L(), $carroceria);
	}
}