<?php include 'header.php' ?>
<?php include 'conectar.php' ?>
<section>
    <div class="container">
        <?php if(!empty($logado)): ?>
            <?php 
            $sabores="";
            foreach ($_POST['sabores'] as $sabor ) {
                $sabores.= $sabor." | ";
            }
            $adicionais="";
            foreach ($_POST['adicionais'] as $adicional ) {
                $adicionais.= $adicional." | ";
            }
            $bebidas="";
            foreach ($_POST['bebidas'] as $bebida ) {
                $bebidas.= $bebida." | ";
            }
                $enviarPedido = "INSERT INTO pedidos (sabor, adicional, bebida, cliente, endereco, valor) VALUES ('".$sabores."','".$adicionais."','".$bebidas."','".$logado."','".$_SESSION['endereco']."', '".$_POST['valorTotal']."')";
                mysqli_query($conectar,$enviarPedido);
                header('location:./');
                ?>
                <?php else: ?>
                    <h2>Crie um cadastro para prosseguir com a compra: <a href="./cadastro.php" class="btn-pizzaria">Clique aqui</a> </h2>
        <?php endif; ?>
    </div>
</section>
<?php include 'footer.php' ?>