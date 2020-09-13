<!DOCTYPE html>
<html>
<head>
	<title>Aluguel de Veiculos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.CSS">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.CSS">
</head>
<body>
	<header>
		<div class="container">
		<a href="?pagina=home"><img src="img/captura.png" title="Logo" alt="Logo"></a>
		<div id="menu">
			<a href="?pagina=Veiculos">Veículos</a>
			<a href="?pagina=Clientes">Clientes</a>
			<a href="?pagina=Aluguel">Lista de Aluguel</a>
			<?php if(isset($_SESSION['login'])){ ?>
				<a href="logout.php"><?php echo $_SESSION['usuario'];?>(Sair)
					<?php } ?>
				</a>
		</div>
	</header>
	<br><br>
<div id="Conteudo" class="container">


