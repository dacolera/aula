<?php

namespace Classes\Interfaces;

use Classes\Interfaces\iRodas;


interface iCarroceria {

	const CABRIOLET = 'cabriolet';
	const SEDA = 'seda';
	const COUPET = 'coupet';
	const HATCH = 'Hatch';

	public function setRodas(iRodas $rodas);

	public function setPortas($quantidadeDePortas);

	public function setType($type);
}