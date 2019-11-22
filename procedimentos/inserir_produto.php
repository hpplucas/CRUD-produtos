<?php

require_once '../bd/conexao.php';

$codproduto = $_POST['codproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO `produtos`(`num_produto`, `nome`, `categoria`, `quantidade`, `fornecedor`)
 VALUES ( $codproduto, '$nomeproduto', '$categoria', $quantidade, '$fornecedor');";

$inserir = mysqli_query($conn, $sql);

header('location: ../index.php')
?>