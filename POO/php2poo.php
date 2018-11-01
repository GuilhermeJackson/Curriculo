<?php 

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){		//"get" PEGAR

		return $this->modelo;
	}	

	public function setModelo($modelo){	//"get" recebe o paramentro(quem eu quero mudar)

		$this->modelo = $modelo;
	}

	public function getMotor():float{		//":float" Converte para float


		return $this->motor;
	}

	public function setMotor($motor){		

		$this->motor = $motor;
	}

	public function getAno():int{	//":int" Converte de string para inteiro

		return $this->ano;
	}

	public function setAno($ano){

		$this->ano = $ano;
	}

	public function exibir(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);

	}

}

$gol = new carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2022");

print_r($gol->exibir());
echo "Usando o print_r();<br><br>";
var_dump($gol->exibir(), "Usando o var_dump();");

 ?>