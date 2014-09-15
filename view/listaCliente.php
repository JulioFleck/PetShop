<table class="table table-striped">
	<caption>
		<h4>Listagem de Clientes</h4>
	</caption>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Data Nascimento</th>
			<th colspan="2">Ações <a href="cliente.php?op=I"
				class="btn btn-success">Novo</a></th>
		</tr>
	</thead>
	<tbody>
<?php
$dao = new ClienteDAO ( new Cliente () );
$tabela = $dao->listar ();
foreach ( $tabela as $row ) {
	?>
<tr>
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['nome']?></td>
			<td><?php echo $row['telefone']?></td>
			<td><?php echo $row['dataNasc']?></td>
			<td><a href="../controller/clienteController.php?op=U&id=<?php echo $row['id']?>"><i
					class="icon-edit"></i></a></td>
			<td><a href="../controller/clienteController.php?op=D&id=<?php echo $row['id']?>"><i
					class="icon-trash"></i></a></td>
		</tr>

<?php
}
?>
	</tbody>
</table>

