<!DOCTYPE html>
<html>
    <head>
    <meta name="format-detection" content="telephone=no">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <title>Tela Cadastrar Clientes - Pizzaria</title>
    </head>
    <body>
    <div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Cadastrar Clientes </h5>
					<p>
						<form method="post" action="controller/ControllerCadastroClien.php?funcao=cadastro" id="Id" name="Id">
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" name="txtNome" required id="txtNome">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Endereço:</label>
								<input type="text" class="form-control" required name="txtEndereco" id="txtEndereco">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Bairro:</label>
								<input type="text" class="form-control" required name="txtBairro" id="txtBairro">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">CEP:</label>
								<input type="tel" class="form-control" required name="txtCEP" id="txtCEP" placeholder="xxxxx-xxx">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Cidade:</label>
								<input type="text" class="form-control" required name="txtCidade" id="txtCidade">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Estado:</label>
								<input type="text" class="form-control" required name="txtEstado" id="txtEstado" placeholder="XX">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Celular:</label>
								<input type="tel" class="form-control" required name="txtCelular" id="txtCelular" placeholder="(xx)xxxxx-xxxx">
							</div>
							<button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>
						</form>
					</p>
				</div>
			</div>
    </body>
</hmtl>