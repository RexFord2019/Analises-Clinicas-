
<?php include_once("../conn/connection.php"); ?>
<?php  



if($_GET['data_inicio'] && $_GET['data_fim']){

	$query = "select  * from dados d where  data_estagiamento >= '".$_GET['data_inicio']."' and data_estagiamento <= '".$_GET['data_fim']."';";
	$query = mysqli_query($conn, $query);



	while (@$row = mysqli_fetch_assoc($query)) {
		$lista [] = $row;
	}

	$query = "select sum(valor_analise) as total from dados d where  data_estagiamento >= '".$_GET['data_inicio']."' and data_estagiamento <= '".$_GET['data_fim']."';";
	$query = mysqli_query($conn, $query);

	$total = mysqli_fetch_assoc($query);


?>

<?php }?>
<?php

require 'pdf/vendor/autoload.php';
use Dompdf\Dompdf;


$dompdf = new Dompdf();

//lendo o arquivo HTML correspondente
$html = '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
$html.= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>';
$html.= '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>';
$html.= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>';





$html.= "<table class='table' style='width:100%; border:1px; border-color:#000;'>";
$html.= "<tr>
		   <th>Numero do exame</th>
		   <th>Nome do paciente</th> 
		   <th>Data de nascimento</th>
		   <th>Data do Exame</th>
		   <th>Data de Estagiamento</th>
		   <th>Valor da Análise</th>
		   <th>Total: R$".$total['total']."</th>
		</tr>";
		foreach ($lista as $key => $reg) {
			$html.= "<tr>
					    <td>".$reg['numero_exame']."</td>
					    <td>".$reg['nome_paciente']."</td> 
					    <td>".date('d/m/Y', strtotime($reg['data_nascimento']))."</td>
					    <td>".date('d/m/Y', strtotime($reg['data_exame']))."</td>
					    <td>".date('d/m/Y', strtotime($reg['data_estagiamento']))."</td>
					    <td>".$reg['valor_analise']."</td>
					</tr>";
		}


$html.="</table>";




//inserindo o HTML que queremos converter

$dompdf->loadHtml($html);

// // Definindo o papel e a orientação

$dompdf->setPaper('A4', 'landscape');

// // Renderizando o HTML como PDF

$dompdf->render();

// // Enviando o PDF para o browser

$dompdf->stream(
		"Relatorio Dados Clinicos.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>

