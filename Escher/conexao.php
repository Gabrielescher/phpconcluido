<?php 
$host = "localhost"; //Servidor local (onde esta o banco de dados)
$user = "root"; //Nome de usuario
$pass = ""; // Senha - O XAMPP nao foi instalado com senha
$db = "bdDisciplina_Gabriel"; // Nome do banco de dados
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error($conexao));
mysqli_select_db($conexao, $db);
?>