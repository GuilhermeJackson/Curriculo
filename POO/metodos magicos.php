<?php 

class Endereco {

private $logradouro;
private $numero;
private $cidade;

public function __construct($a, $b, $c){

	$this->logradouro = $a;
	$this->numero = $b;
	$this->cidade = $c;
	}

	public function __destruct(){	//TIPO O "unset". Limpa a variavel

		var_dump("DESTRUIR");
	}

	public function __toString(){

		return $this->logradouro. " , ".$this->numero. " - " .$this->cidade;
	}

}

$meuEndereco = new Endereco("Rua João Silvino da Cunha", "123","Gaspar");

var_dump($meuEndereco);
echo "<br>";

// unset($meuEndereco);	//NÃO FUNCIONA O ECHO SE ESSE "unset" TIVER SIDO CHAMADO
echo "<br>";

echo $meuEndereco;
 ?>