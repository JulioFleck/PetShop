<!DOCTYPE html>
<html lang="en">
<head>
        <?php include 'header.php'; ?>

    </head>
<body>
        <?php include 'topo.php'; ?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
	<div class="container-fluid">
		<!-- CLASSE PARA DEFINIR UMA LINHA -->
		<div class="row-fluid">
                <?php include 'menu.php'; ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
			<div class="span10">
				<div class="well">
 						<?php
							if (isset($_GET ['op']) and $_GET ['op'] == 'I') {
								include 'formCliente.php';
							} else {
								include 'listaCliente.php';
							}
							
							?>
                    </div>
			</div>
		</div>
	</div>
</body>
</html>

