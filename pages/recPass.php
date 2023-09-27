
<?php 
session_start();
include_once '../includes/cabecalho.php';
?>
<html lang="pt-br">
<body>
<form action="../back-end/novasenha.php" method="POST">
<br><br>
<div class="row">
<div class="col s12 m4 offset-m4">
<div class="card">
<div class="card-action white lighten-1 black-text">
<center><h5 class="center">Recuperar senha</h5></center><br>
</div>
<center>
<img src="../images/neutralcode.jpg" alt="" width="200" height="auto"></br></center>
<?php if(isset($_SESSION['senha_enviada'])): ?>
<div class="notification is-danger">
<center><p class='center green-text'> Nova senha envida ao seu email, verifique a caixa de entrada ou spam (Lixo Eletronico)</p></center>
</div>
<?php endif; unset($_SESSION['senha_enviada']); ?>

<?php if(isset($_SESSION['usuario_naoexiste'])): ?>
<div class="notification is-danger">
<center><p class='center red-text'>Usuário não encontrado!</p></center>
</div>
<?php endif; unset($_SESSION['usuario_naoexiste']); ?>

</br></br>

<div class="input-field col s10 center">
  <i class="material-icons prefix">offline_pin</i>
  <input name="email" type="text" class="validate" placeholder="Digite seu E-mail" required>
  <label for="email">E-mail</label>
</div></br></br>
</br></br>
<center><button class="btn blue small" type="submit" name="action">Recuperar</button></center>
</br>
<center><a href="../index.php" class="btn red small">Voltar</a></center>
</br></br>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>

</div>
</div>
</div>
</form>
</body>
</html>