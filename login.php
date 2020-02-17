<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['usuario'];
$pass = $_POST['senha'];

include 'conectar.php';
$buscarUsuario = 'SELECT * FROM usuarios WHERE email ="'.$login.'" AND senha ="'.$pass.'"';
// echo $buscarUsuario;
$buscar= mysqli_query($conectar, $buscarUsuario);
if($linhas = mysqli_fetch_assoc($buscar)  )
{
$_SESSION['login'] = $login;
$_SESSION['nome'] = $linhas['nome'];
$_SESSION['endereco'] = $linhas['endereco'];
$_SESSION['senha'] = $pass;
header('location:/pizzaria');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  unset($_SESSION['nome']);
  header('location:/pizzaria/?senha=incorreta');
   
  }
?>