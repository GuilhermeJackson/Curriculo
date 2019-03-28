<form>

	<input type="text" name="nome">	//tabela text nome
	<input type="date" name="data nascimento"> // campo
	<input type="submit" value="OK">	// botão

</form>
<?php 

if (isset($_GET)){	// Verifica se a variável é definida. (da erro de variavel não definida se não usar)

		foreach ($_GET as $key => $value) {	//$_GET = percorre array super global. $key = vai ser o nome/posição dos campos. $value = onde fica armazenado o conteudo dos campos.
	
		echo "Nome do campo: " . $key. "<br>";

		echo "Valor do campo: " .$value;

		echo "<hr>"; //escreve uma linha
	}
}
 ?>