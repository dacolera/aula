<?php

use Classes\Matematica\Math;

class MathTest extends PHPUnit_Framework_TestCase {

    private $instance;

	function setUp() {

		$this->instance = new Math();
	}

	function test_somar_dois_numeros() {

		$this->assertEquals($this->instance->somar(3,5),8);
	}

	function test_media_com_varios_numeros() {

		$this->assertEquals($this->instance->media(5,10,5,10),7.5);
	}

	function test_divisao_com_parametros_corretos() {

		$this->assertEquals($this->instance->dividir(10,2),5);
	}

	/**
	  * @expectedExceptionMessage Nao eh possivel dividir por zero
	  * @expectedException Exception
	  */
	function test_divisao_por_zero() {

		$this->instance->dividir(10,0);
	}
}