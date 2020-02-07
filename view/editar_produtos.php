<?php 

	require_once "../bd/conexao.php";

	$id = $_GET['id'];

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <link rel="stylesheet" href="../css/style.css">
    
</head>
<body>
    <div class="container" id="container-conf" style="margin-top: 40px;">
        <h3>Editar produto</h3>
        <form action="../procedimentos/atualizar_produto.php" method="POST">

        	<?php 

        	$sql = "SELECT * FROM `produtos` WHERE `id_produto` = $id;";

        	$busca = mysqli_query($conn, $sql);
        	
        	$array = mysqli_fetch_array($busca);

                $num_produto = $array[1];
                $nome = $array[2];
                $categoria = $array[3];
                $fornecedor = $array[5];
                $quant = $array[4];


            ?>

            <div class="form-group" style="margin-top: 20px">
                <label>Cod. do produto</label>
                <input type="number" name="id" class="form-control" value="<?php echo $id; ?>" style="display: none;">

                <input type="number" name="codproduto" value="<?php echo $num_produto; ?>" style="display: none;" >
                <input type="number"class="form-control" value="<?php echo $num_produto; ?>" disabled>

            </div>
            <form>
            <div class="form-group">
                <label>Nome do produto</label>
                <input type="text" class="form-control" name="nomeproduto" autocomplete="off" required
                 value="<?php echo $nome ?>">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria" required>
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" value="<?php echo $fornecedor; ?>" required>
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" required autocomplete="off"
                 value="<?php echo $quant ?>">
            </div>
            <div style="text-align: right">
                <button type="submit" id="bt-cadastro" class="btn btn-sm">Atualizar</button>
            </div>
        </form>
    </div>
    <script type="text/JavaScript" src="../js/bootstrap.js"></script>
</body>
</html>