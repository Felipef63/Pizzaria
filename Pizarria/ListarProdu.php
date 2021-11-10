<?php
require_once("controller/ControllerCadastroProdu.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery.js"></script>
    <title>Tela Listar Produto - Pizzaria</title>
    </head>
    <body>
    <div class="container">
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body" style="margin: auto;">
					<h5 class="card-title">Listar os Produtos</h5>
					<table class="table table-responsive" style="width: auto;">
						<thead class="table-active bg-primary">
							<tr>
								<th scope="col">Nome</th>
								<th scope="col">imagem</th>
								<th scope="col">Endereço</th>
								<th scope="col">Descrição</th>
								<th scope="col">Valor</th>
							</tr>
						</thead>
						<tbody id="TableData">
						<?php
							$controller = new ControllerCadastroProdu();
							$resultado = $controller->listar(0);
							//print_r($resultado);
							for($i=0;$i<count($resultado);$i++){ 
						?>
								<tr>
									<td scope="col"><?php echo $resultado[$i]['Nome_Produtol']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['img']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['Descricao']; ?></td>
									<td scope="col"><?php echo $resultado[$i]['Valor_Unitario']; ?></td>
									<td scope="col">
										<button type="button" class="btn btn-outline-primary" onclick="location.href='EditProdu.php?id=<?php echo $resultado[$i]['Id']; ?>'" style="width: 72px;">Editar</button>
										<button type="button" class="btn btn-outline-primary" onclick="javascript:confirmDelete('ExcluirProdu.php?id=<?php echo $resultado[$i]['Id']; ?>')" style="width: 72px;">Excluir</button>
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
    </body>
</hmtl>