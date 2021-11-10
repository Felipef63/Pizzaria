<?php
	require_once("Controller/ControllerClien.php");

	$controller = new ControllerCadastroClien();
	$resultado = $controller->excluir($_GET['Id']);

?>