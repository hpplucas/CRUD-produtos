<?php 
	require_once "../bd/conexao.php";

	$id = $_GET['id'];

	$sql = "DELETE FROM `produtos` WHERE `id_produto` = ". $id .";";

	$delete = mysqli_query($conn, $sql);

 	header('location: ../index.php');

 ?>