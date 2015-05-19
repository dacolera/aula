<?php

namespace Classes;

use Classes\Interfaces\iCarroceria;
use Classes\Interfaces\iRodas;

class CarroceriaVolkswagen implements iCarroceria {

	protected $type;
	protected $qtdPortas;
	protected $rodas;

	public function setRodas(iRodas $rodas) {
		$this->rodas = $rodas;
		return $this;
	}

	public function setPortas($quantidadeDePortas) {
		$this->qtdPortas = $quantidadeDePortas;
		return $this;
	}

	public function setType($type) {
		$this->type = $type;
		return $this;
	}
}