<?php

class Sorteio{

	// Variáveis
	private $opcao;
	private $qtd;
	
	// Construct e destruct
	public function __construct() {
	
	}
	public function __destruct() {

	}
	
	// get
	public function __get($a) {
		return $this->$a;
	}
	
	// set
	public function __set($a, $v) {
		$this->$a = $v;
	}
	

	/* --------------FUNÇÕES-------------- */	

	// Gerando dados, embaralhando array e pegando a primeira posição
	public function gerarD4() {
		$n = range(1,4);
		shuffle($n);
		return $n[0];
	}
	
	public function gerarD6() {
		$n = range(1,6);
		shuffle($n);
		return $n[0];
	}
	
	public function gerarD8() {
		$n = range(1,8);
		shuffle($n);
		return $n[0];
	}
	
	public function gerarD10() {
		$n = range(1,10);
		shuffle($n);
		return $n[0];
	}
	
	public function gerarD12() {
		$n = range(1,12);
		shuffle($n);
		return $n[0];
	}
	
	public function gerarD20() {
		$n = range(1,20);
		shuffle($n);
		return $n[0];
	}
	

	// De acordo com o dado escolhido gerar o mesmo
	public function verificar() {

		if ($this->opcao == 'd4') {

			return $this->gerarD4();

		} else if ($this->opcao == 'd6') {

			return $this->gerarD6();

		} else if ($this->opcao == 'd8') {

			return $this->gerarD8();

		} else if ($this->opcao == 'd10') {

			return $this->gerarD10();

		} else if ($this->opcao == 'd12') {

			return $this->gerarD12();

		} else if ($this->opcao == 'd20') {

			return $this->gerarD20();

		} else {

			return 'voce bugou o site';

		}//fim if/else

	}//fim função verificar

	
}// fim classe

?>