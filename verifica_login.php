<?php
error_reporting (0);
if(!$_SESSION['nome']) {
	header('Location: index.php');
	exit();
}
?>