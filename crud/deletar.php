<?php include_once("../conn/connection.php"); ?>
<?php  
	
	$query = "delete from dados where id_dado = ".$_GET['id_dado'].";";
	$query = mysqli_query($conn, $query);

	header("refresh:0 ../pacientes.php");
?>