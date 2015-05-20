<?php

namespace Classes\Factories;

use Classes\Abstracts\AbstractFactory;
use Classes\Carro;
use Classes\Motor2L;
use Classes\CarroceriaVolkswagen;
use Classes\RodaMomo;
use Classes\Interfaces\iCarroceria;
use Classes\Interfaces\iOpcional;


class CarroTopFactory extends AbstractFactory {
	
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
		$carroTop =  new Carro(new Motor2L(), $carroceria);
		$carroTop
			->addOpcional(iOpcional::AR_CONDICIONADO)
			->addOpcional(iOpcional::DIRECAO_HIDRAULICA)
			->addOpcional(iOpcional::SOUND_SYSTEM);	

		return  $carroTop;	
	}
}