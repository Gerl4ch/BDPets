<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo cliente</h3>
			
			<form action="action_php/criar.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="raca" id="raca">
					<label for="raca">Raça</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="cor" id="cor">
					<label for="cor">Cor</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="endereco" id="endereco">
					<label for="endereco">Endereço</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="dataNasc" id="dataNasc">
					<label for="dataNasc">Data de Nascimento</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="peso" id="peso">
					<label for="peso">Peso</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="idade" id="idade">
					<label for="idade">Idade</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="rga" id="rga">
					<label for="rga">RGA</label>
				</div>


				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de Pets</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>