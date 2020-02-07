<?php 

session_start();

if (!isset($_SESSION['logado'])) header('location: view/login.php');

 ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">


    <style type="text/css">
   

        #menu-bar {
            padding: 10px;
            border: 2px solid #f3f3f3;
            border-radius: 15px;
            -webkit-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
            -moz-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
            box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);    

        }

    </style>
</head>
<body>
    <div id="menu-bar">
        <div class="container">
            <ul class="nav justify-content-end" id="menu">
                
                <li style="margin-right: 5px;">
                    <div class="dropdown">
                      <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastrar
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="view/cadastrar_produto.php">Produto</a>
                        <a class="dropdown-item" href="#">Fornecedor</a>
                        <a class="dropdown-item" href="#">Categoria</a>
                      </div>
                    </div>

                </li>

                <li class="nav-item dropdown">
                   <div class="btn-group">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user"></i>
                      </button>
                      <div class="dropdown-menu">
                        <h5 class="dropdown-item" href="#"><b>Usuário</b></h5>
                        <a class="dropdown-item" href="#">Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="procedimentos/sair.php">Sair</a>
                      </div>
                    </div>
                  </li>
            </ul>
            </div>
        </div>

        <div class="container" style="margin-top: 20px; text-align: center;">
        <h3 style="margin-bottom: 15px;">Produtos cadastrados</h3>
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
                         require_once "bd/conexao.php";
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
                        <td><a class="btn btn-warning" href="view/editar_produtos.php?id=<?php echo $id; ?>"role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a></td>
                        <td><a class="btn btn-danger" href="procedimentos/excluir_produtos.php?id=<?php echo $id; ?>"role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a></td>
                    </tr>

                        <?php } ?>
         </table>
     </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7caf364740.js" crossorigin="anonymous"></script>
</body>
</html>
