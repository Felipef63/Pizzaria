<!DOCTYPE html>
<html>
    <head>
    <meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <title>Tela Cadastrar Produtos - Pizzaria</title>
    </head>
    <body>
    <div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Cadastrar Produtos </h5>
					<p>
						<form method="post" action="controller/ControllerCadastro.php?funcao=cadastro" id="Id_Produto" name="Id_Produto">
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome-Produto:</label>
								<input type="text" class="form-control" name="txtNomeProduto" required id="txtNomeProduto">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Imagem:</label>
								<input type="file" class="form-control" required name="Imagem" id="IMG">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlTextarea1">Descrição</label>
								<textarea class="form-control" name="txtDescricao" id="txtDescrição" rows="3"></textarea>
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Valor:</label>
								<input type="number" class="form-control" required name="txtValor" id="txtValor" placeholder="XX">
                            </div>
							<button type="submit" id="btnInserirProdu" class="btn btn-primary">Cadastrar-Produto</button>
						</form>
					</p>
				</div>
			</div>
    </body>
</hmtl>