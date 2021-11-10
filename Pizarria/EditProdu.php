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
					<h5 class="card-title">Editar Produto</h5>
					<p>
						<?php
							$controller = new ControllerCadastro();
							$resultado = $controller->listar($_GET['ID_Produto']);
							//print_r($resultado);
						?>
						<form method="post" action="controller/ControllerCadastroProdu.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" name="txtNome" required id="txtNome" value="<?php echo $resultado[0]['Nome_Produto']; ?>">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Imagem:</label>
								<input type="file" class="form-control" required name="Imagem" id="IMG" value="<?php echo $resultado[0]['img']; ?>">
							</div>
                            <div class="form-group">
								<label for="exampleFormControlTextarea1">Descrição</label>
								<textarea class="form-control" name="txtDescricao" id="txtDescricao" rows="3"><?php echo $resultado[0]['Descricao']; ?></textarea>
							</div>
                            <div class="form-group">
								<label for="exampleFormControlInput1">Valor:</label>
								<input type="number" class="form-control" name="txtValor" required id="txtValor" value="<?php echo $resultado[0]['Valor_Unitario']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx" value="<?php echo $resultado[0]['telefone']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Origem:</label>
								<select class="form-control" required name="txtOrigem" id="txtOrigem">
									<option <?php if($resultado[0]['origem'] == "Celular"){ echo "selected"; } ?>>Celular</option>
									<option <?php if($resultado[0]['origem'] == "Fixo"){ echo "selected"; } ?>>Fixo</option>
									<option <?php if($resultado[0]['origem'] == "Whatsapp"){ echo "selected"; } ?>>Whatsapp</option>
									<option <?php if($resultado[0]['origem'] == "Facebook"){ echo "selected"; } ?>>Facebook</option>
									<option <?php if($resultado[0]['origem'] == "Instagram"){ echo "selected"; } ?>>Instagram</option>
									<option <?php if($resultado[0]['origem'] == "Google Meu Negocio"){ echo "selected"; } ?>>Google Meu Negocio</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Data do Contato:</label>
								<input type="date" class="form-control" required name="txtDataContato" id="txtDataContato" value="<?php echo $resultado[0]['data_contato']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Observação</label>
								<textarea class="form-control" name="txtObservacao" id="txtObservacao" rows="3"><?php echo $resultado[0]['observacao']; ?></textarea>
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