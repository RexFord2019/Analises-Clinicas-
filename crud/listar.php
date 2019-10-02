<?php include("conn/connection.php");?>
<?php  

	$query = "select * from dados;";
	$query = mysqli_query($conn, $query);

	while($row = mysqli_fetch_assoc($query)){
		$lista [] = $row;
	}
?>