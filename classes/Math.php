<?php

namespace classes;

class Math {

	public function somar($n1, $n2) {
		
		return $n1 + $n2 ;
	}

	public function media() {

		return array_sum(func_get_args()) / func_num_args() ;
	} 
}