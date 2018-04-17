<?php 
include '../modelo/sorteio.class.php';

$s = new Sorteio();
;
$s->opcao = $_POST['selopcao'];
$s->qtd = $_POST['txtqtd'];


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