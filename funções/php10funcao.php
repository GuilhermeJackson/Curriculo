<?php 

function test($callback){	//"callback" quando o precesso leva um tempo e chama essa função podendo mandar um e-mail ou coisa do tipo

	//Processo lento

	$callback();

}

test(function(){
	echo "Terminou";
});


 ?>