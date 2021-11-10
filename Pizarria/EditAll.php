<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <title>Tela Editar - Pizzaria</title>
    </head>
    <body>
    <div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Editar Cliente</h5>
					<p>
						<?php
							$controller = new ControllerCadastroClien();
							$resultado = $controller->listar($_GET['Id']);
						?>
						<form method="post" action="controller/ControllerCadastroClien.php?funcao=editar&id=<?php echo $resultado[0]['Id']; ?>" id="form" name="form">
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" name="txtNome" required id="txtNome" value="<?php echo $resultado[0]['Nome']; ?>">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Endereço:</label>
								<input type="text" class="form-control" name="txtEndereco" required id="txtEndereco" value="<?php echo $resultado[0]['Endereco']; ?>">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Bairro:</label>
								<input type="text" class="form-control" name="txtBairro" required id="txtBairro" value="<?php echo $resultado[0]['Bairro']; ?>">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">CEP:</label>
								<input type="text" class="form-control" name="txtCEP" required id="txtCEP" value="<?php echo $resultado[0]['CEP']; ?>">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Cidade:</label>
								<input type="text" class="form-control" name="txtCidade" required id="txtCidade" value="<?php echo $resultado[0]['Cidade']; ?>">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Estado:</label>
								<input type="text" class="form-control" name="txtEstado" required id="txtEstado" value="<?php echo $resultado[0]['Estado']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx" value="<?php echo $resultado[0]['Telefone']; ?>">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Celular:</label>
								<input type="tel" class="form-control" required name="txtCelular" id="txtCelular" placeholder="(xx)xxxxx-xxxx" value="<?php echo $resultado[0]['Celular']; ?>">
							</div>
							<button type="submit" id="btnInserir" class="btn btn-primary">Editar</button>
						</form>
					</p>
				</div>
			</div>
		</div>
	</div>
    </body>
</hmtl>