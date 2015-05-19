<?php

namespace Classes\Abstracts;

use Classes\Interfaces\iRodas;

abstract class Rodas implements iRodas {

	protected $size;
	protected $psi;
	protected $marca;

	public function setSize($size) {
		$this->size = $size;
		return $this;
	}

	public function calibrar($psi) {
		$this->psi = $psi;
		return $this->psi;
	}

	public function getSize() {
		return $this->size;
	}

	public function getMarca() {
		return $this->marca;
	}
}