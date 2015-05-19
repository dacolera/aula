<?php

namespace Classes;

class Math {

	public function somar($n1, $n2) {
		
		return $n1 + $n2 ;
	}

	public function media() {

		return array_sum(func_get_args()) / func_num_args() ;
	}

	public function dividir($dividendo, $divisor) {

		if ($divisor == 0) {
			throw new \Exception('Nao eh possivel dividir por zero');
		}

		return $dividendo / $divisor;
	} 
}