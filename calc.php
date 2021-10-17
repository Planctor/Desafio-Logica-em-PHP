<?php
/**
 * Cálculadora
 */
class Calculadora
	{	
		public $auxiliar = 0;
		public function soma($numero) {
			$this->auxiliar = $this->auxiliar + $numero;
		}
		public function subtracao($numero) {
			$this->auxiliar = $this->auxiliar - $numero;
		}
		public function multiplicacao($numero) {
			$this->auxiliar = $this->auxiliar * $numero;
		}
		public function divisao($numero) {
			$this->auxiliar = $this->auxiliar / $numero;
		}
		public function total() {
			echo $this->auxiliar;
		}
		public function limpar() {
			echo $this->auxiliar = 0;
		}
	}