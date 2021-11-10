<?php
require_once("controller/ControllerCadastroClien.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <title>Tela Listar - Pizzaria</title>
    </head>
    <body>
    <div class="container">
			<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body" style="margin: auto;">
					<h5 class="card-title">Listar os Clientes</h5>
					<table class="table table-responsive" style="width: auto;">
						<thead class="table-active bg-primary">
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">Telefone</th>
								<th scope="col">Endereço</th>
								<th scope="col">Bairro</th>
								<th scope="col">CEP</th>
								<th scope="col">Cidade</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Celular</th>
							</tr>
						</thead>
						<tbody id="TableData">
						<?php
							$controller = new ControllerCadastroClien();
							$resultado = $controller->listar(0);
							//print_r($resultado);
							for($i=0;$i<count($resultado);$i++){ 
						?>
								<tr>
									<td scope="col"><?php echo $resultado[$i]['Nome_Perfil']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['Endereco']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['Bairro']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['CEP']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['Cidade']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['Estado']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['Telefone']; ?></td>
                                    <td scope="col"><?php echo $resultado[$i]['Celular']; ?></td>
									<td scope="col">
										<button type="button" class="btn btn-outline-primary" onclick="location.href='EditALL.php?id=<?php echo $resultado[$i]['Id']; ?>'" style="width: 72px;">Editar</button>
										<button type="button" class="btn btn-outline-primary" onclick="javascript:confirmDelete('DeleteAll.php?id=<?php echo $resultado[$i]['Id']; ?>')" style="width: 72px;">Excluir</button>
									</td>
								</tr>
                                <button type="button" class="btn btn-outline-primary" onclick="location.href='index.php'" style="width: 72px;">Tela Principal</button>
						<?php
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
    </body>
</hmtl>