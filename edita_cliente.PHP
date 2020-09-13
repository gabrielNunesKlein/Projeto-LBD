<?php
include 'db.php';
$id_cliente = $_POST['IDCLIENTE'];
$id_veiculo = $_POST['escolha_veiculo'];
$id_usuario = $_POST['escolha_usuario'];
$nome = $_POST['NOME_CLIENTE'];
$renach = $_POST['RENACH'];
$rg = $_POST['RG'];
$saida = $_POST['DATA_SAIDA'];
$entrega = $_POST['DATA_ENTREGA'];

$query = " UPDATE CLIENTE SET NOME_CLIENTE = '$nome', RENACH = '$renach', RG = '$rg', DATA_SAIDA = '$saida', DATA_ENTREGA = '$entrega', ID_VEICULO = id_veiculo, ID_USUARIO = $id_usuario WHERE  IDCLIENTE = $id_cliente";

mysqli_query($conexao, $query);
header('location:index.php?pagina=Clientes');