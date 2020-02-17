<?php include 'header.php'; ?>
<section>
    <div class="container">
        <form class="cadastrar" action="./cadastrar.php" method="post" style="border:1px solid #ccc">

    <h3>Cadastre-se</h3>
    <p>Preencha essas informações para se cadastrar.</p>
    <hr>
    <label for="Nome"><b>Nome</b></label>
    <input type="text" placeholder="Digite seu nome" name="nome" required>

    <label for="email"><b>E-mail</b></label>
    <input type="text" placeholder="Entre um email" name="email"  required>

    <label for="senha"><b>Senha</b></label>
    <input type="password" placeholder="Entre uma senha" name="senha" required>

    <label for="endereco"><b>Endereço</b></label>
    <input type="text" placeholder="Entre seu endereço de entrega" name="endereco" required>

    <label for="telefone"><b>Telefone</b></label>
    <input type="tel" placeholder="Entre um telefone para contato" name="telefone" id="telefone" required>

    <div class="clearfix">
      <a href="javascript:history.back()" class="btn-pizzaria">Cancelar</a>
      <button type="submit" class="btn-pizzaria">Cadastrar</button>
    </div>

</form>
    </div>
</section>
<?php include 'footer.php'; ?>