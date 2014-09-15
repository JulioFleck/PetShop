<?php
class ClienteDAO implements IDAO {
	private $dao;
	private $cli;
	private $tabela;
	function __construct(Cliente $cli) {
		$this->dao = ConnectionFactory::getConnection ();
		$this->cli = $cli;
		$this->tabela = strtolower ( get_class ( $this->cli ) );
	}
	function salvar() {
		// retorna somente os nomes dos campos
		$keys = array_keys ( $this->cli->toArray () );
		// converte um array em string separados por vírgula
		$keys = implode ( ',', $keys );
		$values = ':' . str_replace ( ',', ',:', $keys );
		$qry = $this->dao->prepare ( "INSERT INTO $this->tabela ($keys) VALUES ($values)" );
		$qry->execute ( $this->cli->toArray () );
	}
	function atualizar() {
	}
	function listar() {
		$qry = $this->dao->query ( "select * from $this->tabela" );
		$dados = $qry->fetchAll ( PDO::FETCH_ASSOC );
		return $dados;
	}
	function excluir() {
		$qry = $this->dao->prepare ( "DELETE FROM $this->tabela WHERE id=:id" );
		$qry->execute ( $this->cli->toArray () );
	}
}