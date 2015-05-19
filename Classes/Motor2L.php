<?php

namespace Classes;

use Classes\Interfaces\iMotor;

class Motor2L implements iMotor {

	public function start() {

		echo 'Ligou .......';
	}

	public function stop() {

		echo 'Desligou ......';
	}
}