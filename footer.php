<footer>
    <div class="container">
        Nossas pizzas vem sem cebola e sem azeitona! 🍕
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form class="cadastrar" action="./login" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fazer login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <label for="usuario">E-mail</label>
            <input type="text" name="usuario" id="usuario">
            
            <label for="senha">Senha</label>
            <input type="text" name="senha" id="senha">
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn-pizzaria">Logar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="./dist/js/app.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>