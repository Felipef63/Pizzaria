<!DOCTYPE html>
<html>
    <head>
    <meta name="format-detection" content="telephone=no">
	  <meta name="msapplication-tap-highlight" content="no">
	  <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <title>Tela Principal - Pizzaria</title>
    </head>
    <body>
    <div class="Cliente">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Cliente
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="CadastroClien.php">Cadastrar Produto</a></li>
    <li><a class="dropdown-item" href="ListAll.php">perfil cadastrados</a></li>
    <li><a class="dropdown-item" href="EditAll.php">Editar</a></li>
    <li><a class="dropdown-item" href="DeleteAll.php">Excluir</a></li>
  </ul>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="Produtos">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Produtos
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="CadastroProdu.php">Cadastrar Produtos</a></li>
    <li><a class="dropdown-item" href="ListVendas.php">Lista de Vendas</a></li>
    <li><a class="dropdown-item" href="EditProdu.php">Editar Produtos</a></li>
    <li><a class="dropdown-item" href="ExcluirProdu.php">Excluir Produtos</a></li>
  </ul>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="Vendas">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Vendas
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="Vendas.php">Vendas</a></li>
  </ul>
</div>
    </body>
</hmtl>