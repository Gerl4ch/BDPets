<?php 
	include_once 'action_php/conexao_bdPets.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM dbPets WHERE codPet = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}



?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Pet</h3>
			
			<form action="action_php/alterar.php" method="POST">

				<input type="hidden" name = "codPet" value="<?php echo $dados['codPet']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="raca" id="raca" value="<?php echo $dados['raca']; ?>">
					<label for="raca">Raça</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="cor" id="cor" value="<?php echo $dados['cor']; ?>">
					<label for="cor">Cor</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco']; ?>">
					<label for="endereco">Endereço</label>
				</div>

				<div class="input-field col s12">
					<input type="date" name="dataNasc" id="dataNasc" value="<?php echo $dados['dataNasc']; ?>">
					<label for="dataNasc">Data de Nascimento</label>
				</div>

				<div class="input-field col s12">
					<input type="number" name="peso" id="peso" value="<?php echo $dados['peso']; ?>">
					<label for="peso">Peso</label>
				</div>

				<div class="input-field col s12">
					<input type="number" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
					<label for="idade">Idade</label>
				</div>

				<div class="input-field col s12">
					<input type="number" name="rga" id="rga" value="<?php echo $dados['rga']; ?>">
					<label for="rga">RGA</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Pets</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>