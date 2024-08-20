<?php 

	include_once 'action_php/conexao_bdPets.php';

	//cabeçalho
	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Pets</h3>
			<table class="striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Raça</th>
					<th>Cor</th>
					<th>Endereço</th>
					<th>Data de Nascimento</th>
					<th>Peso</th>
					<th>Idade</th>
					<th>RGA</th>
				</tr>				
			</thead>
			
			<tbody>
				<?php 

					$sql = "SELECT * FROM dbPets";

					$resultado = mysqli_query($connection, $sql);

						
					while($dados = mysqli_fetch_array($resultado)){

					?>				
			
						<tr>
							<td><?php echo $dados['nome']; ?></td>
							<td><?php echo $dados['raca']; ?></td>
							<td><?php echo $dados['cor']; ?></td>
							<td><?php echo $dados['endereco']; ?></td>
							<td><?php echo $dados['dataNasc']; ?></td>
							<td><?php echo $dados['peso']; ?></td>
							<td><?php echo $dados['idade']; ?></td>
							<td><?php echo $dados['rga']; ?></td>

							<td><a href="alterar.php?id=<?php echo $dados['codPet']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

							<td><a href="#modal<?php echo $dados['codPet']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

							<!-- Modal Structure in Materializecss -->
							  <div id="modal<?php echo $dados['codPet']; ?>" class="modal">
							    <div class="modal-content">
							      <h4>Aviso.</h4>
							      <p>Deseja excluir o Pet?</p>
							    </div>
							    <div class="modal-footer">
							      

							      <form action="action_php/excluir.php" method="POST">
							      	<input type="hidden" name="codPet" value="<?php echo $dados['codPet']; ?>">

							      	<button type="submit" name="btn-excluir" class="btn red">Excluir</button>

							      	<a href="#!" class="modal-close waves-effect waves-green btn">Cancelar</a>

							      </form>
							    </div>
							  </div>

						</tr>
						
					<?php }

					?>
					
			</tbody>

			</table>
			<br>
			<a href="cadastrar.php" class="btn">Adicionar Pet</a>
		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>