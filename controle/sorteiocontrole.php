<?php 

// INCLUDES
include '../modelo/sorteio.class.php';

// ATRIBUIÇÔES
$s = new Sorteio();
$s->opcao = $_POST['selopcao'];
$s->qtd = $_POST['txtqtd'];


// Se a quantidade for maior que 100 ou menor ou igual à 0
// retornar para digitar valor entre 1 e 100
// Senão
// retorna a quantidade de dados e o resultado de cada
if ($s->qtd > 100 || $s->qtd <= 0) {

	$html = "Digite a quantidade entre 1 e 100";

} else {

	$html = "";

	for($i=0 ; $i < $s->qtd ; $i++){
		$html .= '<p>Dado '. ($i+1) . ' = <span class="dice-number">'. $s->verificar().'</span></p>';
	}

	json_encode($html);

}

echo $html;

?>