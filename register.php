<?php
	$host = 	"localhost";
	$user = 	"root";
	$pass = 	"";
	$banco = 	"cadastro";
	$conexao = 	mysql_connect($host, $user, $pass) or die(mysql_error());
				mysql_select_db($banco) or die(mysql_error());

	$nome = 		$_POST['nome'];
	$sobrenome = 	$_POST['sobrenome'];
	$pais = 		$_POST['pais'];
	$estado = 		$_POST['estado'];
	$cidade = 		$_POST['cidade'];
	$email = 		$_POST['email'];
	$senha = 		$_POST['senha'];

	$sql = 		mysql_query("
							INSERT INTO users 	(nome, sobrenome, pais, estado, cidade, email, senha)
							VALUES 				('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')
					  		");

	echo 		"<center><h1>Cadastro efetuado com sucesso!</h1></center>";