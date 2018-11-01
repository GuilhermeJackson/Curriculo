<?php 

class Pessoa {

	public $nome;	// = "DOIS";	//atributo

	public function falar(){	//Método

		return "O meu nome é ". $this->nome;  //sempre escrever o "$this"
	}
}

$guilherme = new Pessoa();
$guilherme->nome = "Guilherme Lindão";
echo $guilherme->falar();


 ?>