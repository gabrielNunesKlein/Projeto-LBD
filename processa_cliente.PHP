<?php
include 'db.php';
$id_veiculo = $_POST['escolha_veiculo'];
$id_usuario = $_POST['escolha_usuario'];
$nome = $_POST['NOME_CLIENTE'];
$renach = $_POST['RENACH'];
$rg = $_POST['RG'];
$saida = $_POST['DATA_SAIDA'];
$entrega = $_POST['DATA_ENTREGA'];

$query = "INSERT INTO CLIENTE (NOME_CLIENTE, RENACH, RG, ID_VEICULO, id_usuario, DATA_SAIDA, DATA_ENTREGA) VALUES ('$nome', '$renach' , '$rg',  $id_veiculo, $id_usuario, '$saida', '$entrega')";

mysqli_query($conexao, $query);
header('location:index.php?pagina=Clientes');

