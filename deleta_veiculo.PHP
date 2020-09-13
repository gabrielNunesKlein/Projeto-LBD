<?php 

include 'db.php';

$id_veiculo = $_GET['ID_VEICULO'];

$query = "DELETE FROM VEICULO WHERE ID_VEICULO = $id_veiculo";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Veiculos');
