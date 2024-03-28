
<?php
	include("clUsr.php");

	$objUsuario						=		new users();
	$objUsuario->nom_usr			=		$_POST['usr'];
	$objUsuario->pwrd_usr			=		MD5($_POST['pwrd']);
	$objUsuario->prfl_id			=		$_POST['pfl_id'];
	$objUsuario->sts_id				=		1;
	$objUsuario->cod_usr_rgstr		=		1;

	header('Location: listarUsuarios.php');
?>

