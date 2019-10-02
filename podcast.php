<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>podcast</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/pagina1.css">

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
<body>
<nav>
	<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
   <ul>
      <li><a href="painel.php">Inicio Home<br/> <small> Estamos aqui</small></a></li>
      <li><a href="#">Agenda<br/> <small>Sis. Agenda</small></a></li>
      <li><a href="#">Clientes<br/> <small>Meet Our Friends</small></a></li>
      <li><a href="#">Corpo Clínico<br/> <small>Médicos</small></a></li>
      <li><a href="#">chat<br/> <small>Bate Papo</small></a></li>
      <li><a href="pacientes.php">Relatórios<br/> <small>Lista</small></a></li>
      <li><a href="logout.php">Ir embora<br/> <small>Sair</small></a></li>
    </ul>
</nav>

<section class="container">
  <h1 class="title has-text-grey">Olá, aproveite o Vídeo</h1>
  <h3 class="title has-text-grey">por Douglas Lacerda</h3> 

<iframe width="660" height="400" src="https://www.youtube.com/embed/ghDkJtH09I8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><hr>
  
<iframe width="660" height="400" src="https://www.youtube-nocookie.com/embed/xujHigypNIU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><hr>

<iframe width="660" height="400" src="https://www.youtube.com/embed/XMpsJ8PPaOM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><hr>
</section>
 </body>
</html>