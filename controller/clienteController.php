<?php
function __autoload($classe) {
	include "../model/$classe.php";
}

$cli = new Cliente ( $_REQUEST );
$dao = new ClienteDAO ( $cli );

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	// Inserir "Salvar"
	$dao->salvar ();
} else {
	// Inserir "Excluir"
	$dao->excluir ();
}

header ( 'Location:../view/cliente.php?op=L' );
