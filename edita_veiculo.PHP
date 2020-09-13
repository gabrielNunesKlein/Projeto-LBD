<?php 

include 'db.php';

$id_veiculo = $_POST['ID_VEICULO'];
$marca = $_POST['MARCA'];
$modelo = $_POST['MODELO'];
$cor = $_POST['COR'];
$ano = $_POST['ANO'];
$disponivel = $_POST['DISPONIVEL'];
$vr_diario = $_POST['diaria'];


$query = "UPDATE veiculo SET MARCA='$marca', MODELO='$modelo', COR='$cor', ANO=$ano, DISPONIVEL = '$disponivel', diaria = $vr_diario WHERE ID_VEICULO = $id_veiculo";

mysqli_query($conexao, $query);

header('location:index.php?pagina=Veiculos');
