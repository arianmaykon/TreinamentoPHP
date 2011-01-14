<?php


/*
$nome = 'Rodrigo';


#$frase = "Ol� meu amigo $nome";

$frase = 'Ol� "meu" amigo ' . $nome;


echo $frase;

############################################################

$var1 = '1';
$var2 = '1';


if ($var1 === $var2) {
	echo '� igual';
} else {
	echo '� diferente';
}

echo ($var1 === $var2) ? '1' : '0';

############################################################

function digaOla($nome = 'Rodrigo') {
	echo 'Ol� ' . $nome .  '!';
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

$lista = array('Segunda', 'Ter�a', 'Quarta');

//for ($x=0; $x < count($lista); $x++) {
//	echo $lista[$x] . '<br />' ;
//}


echo '2� forma de loop <br />';
foreach ($lista as $key) {
	echo $key . '<br />' ;
}

############################################################

*/


$lista = array(
	'seg' => 'Segunda-feira',
	'ter' => 'Ter�a-feira',
	'qua' => 'Quarta-feira',
	'qui' => 'Quinta-feira',
	'sex' => 'Sexta-feira',
	's�b' => 'S�bado',
	'dom' => 'Domingo'
);


// Exemplo de matriz n n�veis
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