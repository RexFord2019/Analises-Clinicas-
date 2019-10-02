<?php
define('HOST', 'Localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');