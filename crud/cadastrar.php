<?php include_once("../conn/connection.php"); ?>
<?php  
	date_default_timezone_set('UTC');
	$data = date("Y-m-d");



	if($_GET['numero_exame']){

	

		$query = "insert into dados (numero_exame, 
									 nome_paciente, 
									 data_nascimento, 
									 data_exame, 
									 valor_analise,
									 data_estagiamento )

			      values(".$_GET['numero_exame'].", 
			      		 '".$_GET['nome_paciente']."', 
			      		 '".$_GET['data_nascimento']."', 
			      		 '".$_GET['data_exame']."', 
			      		 '".$_GET['valor_analise']."',
			      		 '".$data."');";
			      	

		$query = mysqli_query($conn, $query);	      		 
	}

	header('location: ../');	

?>