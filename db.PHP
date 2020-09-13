<?php
$conexao = mysqli_connect('localhost', 'root', null, 'projeto');

$query = "SELECT * FROM CLIENTE";
$consultar_clientes = mysqli_query($conexao, $query);

$query = "SELECT * FROM VEICULO";
$consultar_veiculos = mysqli_query($conexao, $query);

$query = "SELECT * FROM USUARIO";
$consultar_usuario = mysqli_query($conexao, $query);

$query = "SELECT C.NOME_CLIENTE, V.MARCA, V.MODELO, V.COR, V.diaria, C.DATA_SAIDA, C.DATA_ENTREGA, U.USUARIO FROM CLIENTE C INNER JOIN VEICULO V INNER JOIN USUARIO U ON C.ID_VEICULO = V.ID_VEICULO AND U.ID_USUARIO = C.ID_USUARIO";
$consultar_aluguel = mysqli_query($conexao, $query);

