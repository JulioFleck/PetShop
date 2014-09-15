<?php
function __autoload($classe) {
	@include "../model/$classe.php";
	@include "../model/helpers/$classe.php";
}
session_start ();
$usuario = new Usuario ( $_REQUEST );
$dao = new UsuarioDAO ( $usuario );

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	$_SESSION ['count'] = isset ( $_SESSION ['count'] ) ? $_SESSION ['count'] : 0;
	$_SESSION ['count'] ++;
	
	if ($_SESSION ['count'] <= 3) {
		
		$_SESSION ['usuario'] = $dao->logar ();
		
		if ($_SESSION ['usuario']) {
			header ( 'Location:../view/home.php' );
		} else {
			
			$_SESSION ['msg'] = '<div class="alert alert-danger" role="alert">Usuário ou senha inválidos! Tente novamente.</div>';
			header ( 'Location:../view/login.php' );
		}
	} else {
		$_SESSION ['msg'] = '<div class="alert alert-danger" role="alert">Ultrapassou o limite de tentativas.</div>';
		header ( 'Location:../view/login.php' );
	}
} else {
	session_destroy ();
	header ( 'Location:../view/login.php' );
}