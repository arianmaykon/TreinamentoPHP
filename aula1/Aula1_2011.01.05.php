<?php


/*
$nome = 'Rodrigo';


#$frase = "Olá meu amigo $nome";

$frase = 'Olá "meu" amigo ' . $nome;


echo $frase;

############################################################

$var1 = '1';
$var2 = '1';


if ($var1 === $var2) {
	echo 'é igual';
} else {
	echo 'é diferente';
}

echo ($var1 === $var2) ? '1' : '0';

############################################################

function digaOla($nome = 'Rodrigo') {
	echo 'Olá ' . $nome .  '!';
}


digaOla();

############################################################

class Pessoa {

	private $nome;

	
	public function __construct($nome) {
		$this->nome = $nome;
	}

	public function andar() {
		echo 'Eu, ' . $this->nome . ' estou andando!';
	}
}

// Instanciei a classe
$instancia = new Pessoa('Rodrigo');
$instancia->andar();

############################################################

$lista = array('Segunda', 'Terça', 'Quarta');

//for ($x=0; $x < count($lista); $x++) {
//	echo $lista[$x] . '<br />' ;
//}


echo '2ª forma de loop <br />';
foreach ($lista as $key) {
	echo $key . '<br />' ;
}

############################################################

*/


$lista = array(
	'seg' => 'Segunda-feira',
	'ter' => 'Terça-feira',
	'qua' => 'Quarta-feira',
	'qui' => 'Quinta-feira',
	'sex' => 'Sexta-feira',
	'sáb' => 'Sábado',
	'dom' => 'Domingo'
);


// Exemplo de matriz n níveis
#$matriz = array(
#	0 => array('a', 'b', 'c', 'd', 'e'),
#	1 => array('seg', 'ter', 'qua', 5)
#);
#echo '<pre>';
#var_dump($matriz);

#foreach ($lista as $chave => $valor) {
foreach ($lista as $valor) {
#	echo $chave . ' - ' . $valor . '<br />' ;
	echo $valor . '<br />' ;
	
}