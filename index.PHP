<?php
session_start();
include 'db.php';
include 'header.php';

if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];	
	}
	else{
		$pagina = 'Veiculos';
	}
}
else{
	$pagina = 'home';
}


switch ($pagina) {
	case 'Veiculos':
			include 'Veiculos.php';
		break;
	case 'inserir_veiculo':
			include 'inserir_veiculo.php';
		break;
	case 'Clientes':
			include 'Clientes.php';
		break;
	case 'inserir_cliente':
			include 'inserir_cliente.php';
		break;
	case 'Aluguel':
			include 'Aluguel.php';
		break;
	
	default:
		include 'home.php';
		break;
}

include 'footer.php';
