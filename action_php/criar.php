<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {

		//sanitização
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$raca = mysqli_escape_string($connection,$_POST['raca']);
		$cor = mysqli_escape_string($connection,$_POST['cor']);
		$endereco = mysqli_escape_string($connection,$_POST['endereco']);
		$dataNasc = mysqli_escape_string($connection,$_POST['dataNasc']);
		$peso = mysqli_escape_string($connection,$_POST['peso']);
		$idade = mysqli_escape_string($connection,$_POST['idade']);
		$rga = mysqli_escape_string($connection,$_POST['rga']);

		$sql = "INSERT INTO dbPets(nome,raca,cor,endereco,dataNasc,peso,idade,rga)VALUES('$nome','$raca','$cor','$endereco','$dataNasc','$peso','$idade','$rga')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
