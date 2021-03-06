<?php

namespace Classes;

use Classes\Interfaces\iMotor;
use Classes\Interfaces\iCarroceria;
use Classes\Interfaces\iOpcional;
use Classes\Interfaces\iExtensible;

class Carro  implements iExtensible {

	protected $motor;
	protected $carroceria;
	protected $opcionais = array();
	
	public function __construct(iMotor $motor, iCarroceria $carroceria) {

		$this->motor = $motor;
		$this->carroceria = $carroceria;
	}

	public function addOpcional($opcional) {

		array_push($this->opcionais, $opcional);
		return $this;
	}

	public function getOpcionais() {

		echo implode(', ', $this->opcionais); 
	}
}