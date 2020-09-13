<?php
include 'db.php';

$id_cliente = $_GET['IDCLIENTE'];

$query = "DELETE FROM CLIENTE WHERE IDCLIENTE = $id_cliente";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Clientes');