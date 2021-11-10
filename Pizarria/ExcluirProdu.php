<?php
	require_once("Controller/ControllerCadastroProdu.php");

	$controller = new ControllerCadastroProdu();
	$resultado = $controller->excluir($_GET['Id_Produto']);

?>