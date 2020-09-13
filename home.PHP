<br><br>
<h1 style="text-align: center;">Seja Bem-Vindo</h1>
<br><br>

<form method="post" action="login.php">
	<label class="badge badge-secondary">Usuário</label>
	<input type="text" name="usuario" placeholder="Nome do usário" class="form-control"><br><br>

	<label class="badge badge-secondary">Senha</label>
	<input type="password" name="senha" placeholder="Digite a senha" class="form-control"><br><br>

	<input type="submit" value="Entrar" class="btn btn-success">
	<br><br>
</form>

<?php if(isset($_GET['erro'])){ ?>
	<div class="alert alert-danger" role="alert ">
		Erro !!! Login ou Senha invalido
	</div>
<?php } ?>