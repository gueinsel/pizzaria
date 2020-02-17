<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/82c43b0222.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>Faça seu pedido na pizzaria</title>
</head>
<body>
    <?php 
session_start();
 if(isset($_SESSION['nome'])){
     
$logado = $_SESSION['nome'];
 }
?>
    <?php if(isset($_GET['senha'])){ ?>
<?php if($_GET['senha'] == 'incorreta'): ?>
        <script>alert('Senha incorreta! tente novamente')</script>
        <?php endif ?>
    <?php } ?>
    <header>
    <div class="container">
    <div class="row align-items-center justify-content-between">
        <h1 class="col-lg-7">Não se esqueça de se cadastrar para receber promoções. 😉</h1> <div class="links"><a href="./cadastro" class="btn-pizzaria">Cadastrar</a> <button data-toggle="modal" data-target="#exampleModal" class="btn-pizzaria">Login</button></div>
        <?php if(!empty($logado)): ?>
            <div class="col-lg-12">
            Olá, <?= $logado ?>
        </div>
        <?php endif; ?>
    </div>
    </div>
    </header>