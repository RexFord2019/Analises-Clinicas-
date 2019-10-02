<?php

session_start();
include('verifica_login.php'); 
include("crud/listar.php"); 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dados Clínicos</title>
	<link rel="stylesheet" href="css/style.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script> 
</head>
<script>
$(document).ready(function(){
    $('.valor_analise').mask('000.000.000.000.000.00', {reverse: true});
});     
</script>


<body class="container">

   <h2>Olá, <?php echo $_SESSION['nome'];?></h2>
   <ul>
   	  <li><a href="logout.php">Ir embora<br/> <small>Sair</small></a></li>
   	  <li><a href="pacientes.php">Relatórios<br/> <small>Lista</small></a></li>
   	  <li><a href="podcast.php">Podcast<br/> <small>Nossos Vídeos</small></a></li>
   	  <li><a href="#">chat<br/> <small>Bate Papo</small></a></li>
   	  <li><a href="#">Corpo Clínico<br/> <small>Médicos</small></a></li>
   	  <li><a href="#">Clientes<br/> <small>Meet Our Friends</small></a></li>
   	  <li><a href="#">Agenda<br/> <small>Sis. Agenda</small></a></li>
      <li><a href="painel.php">Inicio Home<br/> <small> Estamos aqui</small></a></li>          
    </ul>
</nav>

	<h2>Cadastro de exames</h2>
	<form  action="crud/cadastrar.php" method="GET" accept-charset="utf-8">
		Numero do Exame<input class="form-control"  type="number" required name="numero_exame"><br><br>
		Nome do Paciente<input class="form-control" type="text" required name="nome_paciente"><br><br>
		Data de Nascimento<input class="form-control" type="date" required name="data_nascimento"><br><br>
		Data do Exame <input class="form-control" type="date" required name="data_exame"><br><br>
		Valor da análise <input class="form-control valor_analise" type="text" required name="valor_analise"><br><br>
		<input type="submit" class="btn btn-primary"  value="cadastrar">
	</form>
	<br><br>
	<h2>Relatório</h2>
	<form action="crud/listar_pdf.php" method="get" accept-charset="utf-8">
		Data Inicio<input class="form-control" required type="date" name="data_inicio">
		Data Fim <input class="form-control" required type="date" name="data_fim"><br>
		<input type="submit" class="btn btn-warning" value="Gerar PDF">
	</form>
	<br><br>
	<?php if(@$lista != null){ ?>
	<h2>Lista de Exames</h2>

	
		<table class="table">
			
			<thead>
				<tr>
				   <th>Numero do exame</th>
				   <th>Nome do paciente</th> 
				   <th>Data de nascimento</th>
				   <th>Data do Exame</th>
				   <th>Data de Estagiamento</th>
				   <th>Valor da Análise</th>
				</tr>
			</thead>
			<tbody>
			
				<?php foreach ($lista as $key => $reg) {?>
					<tr>
						<tr>
						    <td><?php echo $reg['numero_exame']?></td>
						    <td><?php echo $reg['nome_paciente']?></td> 
						    <td><?php echo date('d/m/Y', strtotime($reg['data_nascimento']))?></td>
						    <td><?php echo date('d/m/Y', strtotime($reg['data_exame']))?></td>
						    <td><?php echo date('d/m/Y', strtotime($reg['data_estagiamento']))?></td>
						    <td><?php echo $reg['valor_analise']?></td>
						    <td>
						    	<input type="submit" class="btn btn-danger" onclick="aviso(<?php echo $reg['id_dado'];?>)"; value="Excluir">
						    </td>
						</tr>
					</tr>
				<?php }?>
			</tbody>
		</table>
	<?php }?>
</body>
</html>

<script>
	function aviso(id)
{
	if(window.confirm(' Deseja realmente excluir? '))
	{
	
		location.href="crud/deletar.php?id_dado="+id;

	}
	else
	{
		return false;
	}
}


</script>