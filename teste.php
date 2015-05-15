<?php


class Teste {

	public $texto;

	public function teste($texto) {
		$this->texto = $texto;
		print "Sou o metodo construtor";
	}

	public function getTexto() {
		return $this->texto;
	}
}


$teste = new Teste('Hello World');
$teste->getTexto();