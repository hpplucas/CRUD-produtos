 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Listagem de produtos</title>
     <link rel="stylesheet" href="../css/bootstrap.css">

 </head>
 <body>
     <div class="container" style="margin-top: 40px;">
        <h3>Lista de produtos</h3>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Cod. Produto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col"></th>

                    </tr>
                </thead>
                    

                        <?php 
                         require_once "../bd/conexao.php";
                         $sql = "SELECT * FROM `produtos`;";
                         $busca = mysqli_query($conn, $sql);

                         while ($array = mysqli_fetch_array($busca)) {
                             $id = $array[0];
                             $num_produto = $array[1];
                             $nome = $array[2];
                             $categoria = $array[3];
                             $fornecedor = $array[5];
                             $quant = $array[4];
                
                         ?>
                    <tr>
                        <td><?php echo $num_produto ?></td>
                        <td><?php echo $nome ?></td>
                        <td><?php echo $categoria ?></td>
                        <td><?php echo $fornecedor ?></td>
                        <td><?php echo $quant ?></td>
                        <td><a class="btn btn-warning" href="../procedimentos/editar_produtos.php?id=<?php echo $id; ?>"role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a></td>
                        <td><a class="btn btn-danger" href="../procedimentos/excluir_produtos.php?id=<?php echo $id; ?>"role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>
                    </tr>

                        <?php } ?>
         </table>
     </div>
    <script type="text/JavaScript" src="../js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/7caf364740.js" crossorigin="anonymous"></script>
 </body>
 </html>