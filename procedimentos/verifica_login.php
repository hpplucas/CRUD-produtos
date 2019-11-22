<?php 

require_once "../bd/conexao.php";

$user = $_POST['user'];
$password = $_POST['password'];

$sql = "SELECT * FROM `usuarios` WHERE `user`= 'admin' AND `senha` = 'admin';";
		
$busca = mysqli_query($conn, $sql);

$dados = mysqli_fetch_array($busca);

if ($dados[0] != null) {
	session_start();
	$_SESSION['logado'] = true;
	$_SESSION['nome'] = $dados['nome'];
	$_SESSION['user'] = $dados['user'];

	echo $_SESSION['nome'];

	header('location: ../index.php');
} else {
	header('location: ../view/login.php');
}

?>