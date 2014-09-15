<?php
if ($_GET ['op'] == 'I') {
	
	$id = '';
	$nome = '';
	$cpf = '';
	$sexo = '';
	$dataNasc = '';
	$telefone = '';
	$endereco = '';
	$op = 'I';
} else {
		
	$cli = new Cliente($_SESSION ['obj']);
	$id = $cli->__get('id');
	$nome = $cli->__get('nome');
	$cpf = $cli->__get('cpf');
	$sexo = $cli->__get('sexo');
	$dataNasc = $cli->__get('dataNasc');
	$telefone = $cli->__get('telefone');
	$endereco = $cli->__get('endereco');
	$op = 'U';
}
?>
<form class="form-horizontal"
	action="../controller/clienteController.php" method="post">
	<fieldset>
		<div id="legend" class="">
			<legend class="">Cadastro do Cliente</legend>
		</div>

		<div class="control-group">
			<!-- Text input-->
			<label class="control-label" for="id">Id:</label>
			<div class="controls">
				<input placeholder="" class="input-small" type="text" name="id"
					readonly="readonly" value="<?php echo $id?>">
				<p class="help-block"></p>
			</div>
		</div>

		<div class="control-group">
			<!-- Textarea -->
			<label class="control-label" for="nome">Nome:</label>
			<div class="controls">
				<input placeholder="" class="input-xlarge" type="text" name="nome"
					value="<?php echo $nome?>">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="control-group">
			<!-- Textarea -->
			<label class="control-label" for="cpf">Cpf:</label>
			<div class="controls">
				<input placeholder="" class="input-small" type="text" name="cpf"
					value="<?php echo $cpf?>">
				<p class="help-block"></p>
			</div>
		</div>

		<div class="control-group">
			<!-- Textarea -->
			<label class="control-label" for="dataNasc">Data de Nascimento:</label>
			<div class="controls">
				<input placeholder="" class="input-medium" type="text"
					name="dataNasc" value="<?php echo $dataNasc?>">
				<p class="help-block"></p>
			</div>
		</div>

		<div class="control-group">
			<!-- Textarea -->
			<label class="control-label" for="telefone">Telefone:</label>
			<div class="controls">
				<input placeholder="" class="input-xlarge" type="text"
					name="telefone" value="<?php echo $telefone?>">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="control-group">
			<!-- Textarea -->
			<label class="control-label" for="endereco">Endereço:</label>
			<div class="controls">
				<input placeholder="" class="input-xlarge" type="text"
					name="endereco" value="<?php echo $endereco?>">
				<p class="help-block"></p>
			</div>
		</div>
		<div class="control-group">
			<!-- Textarea -->
			<label class="control-label" for="sexo">Sexo:</label>
			<div class="controls">
				<select placeholder="" class="input-small" name="sexo">
					<option value="M"
						<?php echo ($sexo=='M')?'selected="selected"':'' ?>>Masc.</option>
					<option value="F"
						<?php echo ($sexo=='F')?'selected="selected"':'' ?>>Fem.</option>
				</select>
				<p class="help-block"></p>
			</div>
		</div>



		<!-- Operação do formulário -->
		<input type="hidden" name="op" value="<?php echo $op?>" />

		<div class="control-group">
			<!-- Button -->
			<div class="controls">
				<input type="submit" class="btn btn-success" value="Salvar" /> <input
					type="reset" class="btn btn-danger" value="Limpar" />

			</div>
		</div>

	</fieldset>
</form>


