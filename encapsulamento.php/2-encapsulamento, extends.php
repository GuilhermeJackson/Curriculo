<?php 

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";


	public function verDados(){

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}

class Programador extends Pessoa {		// "extends" tem acesso a class Pessoa, menos os "PRIVATES". (Dá erro na linha 26 pq senha é privada)
	public function verDados(){

		echo get_class($this) . "<br>";	//"get_class" Vê se chama a função da classe Programador ou Pessoa.

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}


$objeto = new Programador();

// echo $objeto->nome . "<br/>";

$objeto->verDados();	//"private" e "protected" aparece pq está dentro da própria classe


 ?>