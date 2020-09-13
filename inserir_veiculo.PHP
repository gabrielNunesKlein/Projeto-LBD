<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo Veiculo</h1>
<form method="post" action="processa_veiculo.php">
	<br>
	<label class="badge badge-secondary">Marca:</label><br>
	<input class="form-control" type="text" name="MARCA" placeholder="Insira marca">
	<br><br>
	<label class="badge badge-secondary">Modelo</label><br>
	<input class="form-control" type="text" name="MODELO" placeholder="Insira modelo"><br><br>
	<label class="badge badge-secondary">Cor</label><br>
	<input class="form-control" type="text" name="COR" placeholder="Insira a cor"><br><br>
	<label class="badge badge-secondary">Ano</label><br>
	<input class="form-control" type="number" name="ANO" placeholder="Insira ano"><br><br>

	<label class="badge badge-secondary">Diaria</label><br>
	<input class="form-control" type="number" name="diaria" placeholder="Insira Valor Diario"><br><br>

	<fieldset><legend>Esta Disponivel ?</legend>
		<input type="radio" name="DISPONIVEL" id="SIM" value="Sim">
		<label form="SIM">Sim</label><br><br>
		<input type="radio" name="DISPONIVEL" id="NAO" value="Não">
		<label form="NAO">Não</label>
	</fieldset><br>

	<input type="submit" class="btn btn-success" value="Inserir Veiculo"><br><br>
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consultar_veiculos)){ ?>
		<?php if($linha['ID_VEICULO'] == $_GET['editar']){ ?>
			<h1>Editar veiculo</h1>
				<form method="post" action="edita_veiculo.php">
					<input type="hidden" name="ID_VEICULO" value="<?php echo $linha['ID_VEICULO']; ?>">
					<br>
					<label class="badge badge-secondary">Marca:</label><br>
	<input class="form-control" type="text" name="MARCA" placeholder="Insira marca" value="<?php echo $linha['MARCA']; ?> ">
	<br><br>
	<label class="badge badge-secondary">Modelo</label><br>
	<input class="form-control" type="text" name="MODELO" placeholder="Insira modelo" value="<?php echo $linha['MODELO']; ?>"><br><br>

	<label class="badge badge-secondary">Cor</label><br>
	<input class="form-control" type="text" name="COR" placeholder="Insira a cor" value="<?php echo $linha['COR']; ?>"><br><br>

	<label class="badge badge-secondary">Ano</label><br>
	<input class="form-control" type="number" name="ANO" placeholder="Insira ano" value="<?php echo $linha['ANO']; ?>"><br><br>

	<label class="badge badge-secondary">Diaria</label><br>
	<input class="form-control" type="number" name="diaria" placeholder="Insira Valor Diario" value="<?php echo $linha['diaria']; ?>"><br><br>

	<fieldset><legend>Esta Disponivel ?</legend>
		<input type="radio" name="DISPONIVEL" id="SIM" value="SIM">
		<label form="SIM">Sim</label><br><br>
		<input type="radio" name="DISPONIVEL" id="NAO" value="NAO">
		<label form="NAO">Não</label>
	</fieldset><br><br>

	<input type="submit" class="btn btn-success" value="Editar Veiculo"><br><br>
			<?php } ?>
	<?php } ?>
<?php } ?>