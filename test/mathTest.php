<?php

use classes\Math;

class MathTest extends PHPUnit_Framework_TestCase {

    private $instance;

	public function setUp() {

		$this->instance = new Math();
	}

	/**
	 * @test
	 */
	public function testaSomarDoisNumeros() {

		$this->assertEquals($this->instance->somar(3,5),8);
	}

	/**
	 * @test
	 */
	public function testaMediaComVariosNumeros() {

		$this->assertEquals($this->instance->media(5,10,5,10),7.5);
	}
}