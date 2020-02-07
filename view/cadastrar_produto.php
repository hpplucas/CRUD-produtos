<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
<link rel="stylesheet" href="../css/style.css">

     <style type="text/css">

        #menu-bar {
             background-color: #FEF8D6;
             border: 2px;
             border-color: black;

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
                        <a class="dropdown-item" href="#">Sair</a>
                      </div>
                    </div>
                  </li>
            </ul>
            </div>
        </div>



    <div class="container" id="container-conf" style="margin-top: 40px;">
        <h3>Cadastrar produto</h3>
        <form action="../procedimentos/inserir_produto.php" method="POST">
            <div class="form-group" style="margin-top: 20px">
                <label>Cod. do produto</label>
                <input type="number" name="codproduto" class="form-control" autocomplete="off" required placeholder="Insira o código do produto">
            </div>
            <form>
            <div class="form-group">
                <label>Nome do produto</label>
                <input type="text" class="form-control" name="nomeproduto" autocomplete="off" required placeholder="Insira o nome do produto">
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
                <select class="form-control" name="fornecedor" required>
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" required autocomplete="off" placeholder="Insira a quantidade do produto">
            </div>
            <div style="text-align: right">
                <button type="submit" id="bt-cadastro" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>
    </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7caf364740.js" crossorigin="anonymous"></script>
</body>
</html>