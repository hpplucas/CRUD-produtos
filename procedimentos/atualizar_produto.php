<?php 
	require_once "../bd/conexao.php";

	$id = $_POST['id'];
	$codproduto = $_POST['codproduto'];
	$nomeproduto = $_POST['nomeproduto'];
	$categoria = $_POST['categoria'];
	$fornecedor = $_POST['fornecedor'];
	$quantidade = $_POST['quantidade'];


	$sql = "UPDATE `produtos` SET `num_produto`=$codproduto,`nome`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE `id_produto` = $id;";

	$exec = mysqli_query($conn, $sql);

	if ($exec == true) {
		header('location: ../index.php');
	}
	else {
		echo 'erro ao editar.';
	}

 ?>