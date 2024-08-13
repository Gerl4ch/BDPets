<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$raca = mysqli_escape_string($connection,$_POST['raca']);
		$cor = mysqli_escape_string($connection,$_POST['cor']);
		$endereco = mysqli_escape_string($connection,$_POST['endereco']);
		$dataNasc = mysqli_escape_string($connection,$_POST['dataNasc']);
		$peso = mysqli_escape_string($connection,$_POST['peso']);
		$idade = mysqli_escape_string($connection,$_POST['idade']);
		$rga = mysqli_escape_string($connection,$_POST['rga']);

		$sql = "UPDATE dbPets SET nome = '$nome', raca = '$raca', endereco = '$endereco', dataNasc = '$dataNasc', peso = '$peso', idade = '$idade', rga = '$rga' WHERE codPet = '$codPet'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
