<?php 
include 'db.php';

$marca = $_POST['MARCA'];
$modelo = $_POST['MODELO'];
$cor = $_POST['COR'];
$ano = $_POST['ANO'];
$disponivel = $_POST['DISPONIVEL'];
$vr_diario = $_POST['diaria'];

$query = "INSERT INTO VEICULO (MARCA, MODELO, COR, ANO, DISPONIVEL, diaria) VALUES ('$marca', '$modelo', '$cor', $ano, '$disponivel', $vr_diario)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Veiculos');
