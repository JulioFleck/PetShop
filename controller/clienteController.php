<?php
function __autoload($classe) {
	@include "../model/$classe.php";
	@include "../model/helpers/$classe.php";
}

session_start ();

$cli = new Cliente ( $_REQUEST );
$dao = new ClienteDAO ( $cli );
$validado = true;
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	// Aplicar validator CPF
	if (! empty ( $cli->__get ( 'cpf' ) )) {
		$validado = Validator::validaCPF ( $cli->__get ( 'cpf' ) );
	}
	if ($validado) {
		$dao->salvar ();
		header ( 'Location:../view/cliente.php?op=L' );
	} else {
		$_SESSION ['msg'] = 'Cpf inválido!';
		header ( 'Location:../view/cliente.php?op=F' );
	}
} else {
	if ($_GET ['op'] == 'D') {
		// "Excluir"
		$dao->excluir ();
		header ( 'Location:../view/cliente.php?op=L' );
	} else if ($_GET ['op'] == 'U') {
		$cli = $dao->buscar ();
		$_SESSION ['obj'] = $cli;
		header ( 'Location:../view/cliente.php?op=F' );
	}
}


