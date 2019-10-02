<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>painel</title>
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/pagina1.css">

  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link  href = ' http://fonts.googleapis.com/css?family=Cutive '  rel = ' stylesheet 'type = 'text /css'> 
  <script  src = "//html5shiv.googlecode.com/svn/trunk/html5.js " ></script>
</head>
<body>
<nav>
	<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
   <ul>
      <li><a href="painel.php">Inicio Home<br /> <small> Estamos aqui</small></a></li>
      <li><a href="#">Agenda<br /> <small>Sis. Agenda</small></a></li>
      <li><a href="#">Clientes<br /> <small>Meet Our Friends</small></a></li>
      <li><a href="#">Corpo Clínico<br/> <small>Médicos</small></a></li>
      <li><a href="chat/index.html">chat<br/> <small>Bate Papo</small></a></li>
      <li><a href="podcast.php">Podcast<br/> <small>Nossos Videos</small></a></li>
      <li><a href="pacientes.php">Relatórios<br/> <small>Lista</small></a></li>
      <li><a href="logout.php">Ir embora<br/> <small>Sair</small></a></li>
    </ul>
</nav>
 </body>
</html>