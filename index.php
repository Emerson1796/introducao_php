//verificar versão php
//phpinfo();

//primeiro projeto DIO
<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
//exibe os dados do array
//print_r($categorias);

$nome = 'Emerson';
$idade = 23;

//retorna o tipo da variável
//var_dump($nome);
//var_dump($idade);

if($idade >=6 && $idade <= 12){
	for($i = 0; $i <= count($categorias); $i++){
		if($categorias[i] == 'infantil')
			echo "O nadador ".$nome." compete na categoria infantil";
	}
}
else if($idade >=13 && $idade <= 17){
	for($i = 0; $i <= count($categorias); $i++){
		if($categorias[i] == 'adolescente')
			echo "O nadador ".$nome." compete na categoria adolescente";
	}
}
else{
	for($i = 0; $i <= count($categorias); $i++){
		if($categorias[i] == 'adulto')
			echo "O nadador ".$nome." compete na categoria adulto";
	}
}

?>