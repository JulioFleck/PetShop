<?php
class Usuario extends Object {
	function __construct($dados=array()) {
		parent::popula ($dados);
	}
	protected $id;
	protected $nome;
	protected $login;
	protected $senha;
	protected $email;

}