<?php
class Cliente extends Object {
	function __construct($dados=array()) {
		parent::popula ($dados);
	}
	protected $id;
	protected $nome;
	protected $cpf;
	protected $sexo;
	protected $dataNasc;
	protected $telefone;
	protected $endereco;
}