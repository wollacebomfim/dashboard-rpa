<?php
session_start();
include_once './includes/cabecalho.php';
?>
<html>
<body>


<form action="./back-end/logando.php" method="POST">
<br><br>
<div class="row">
<div class="col s12 m4 offset-m4">
<div class="card">
<div class="card-action white lighten-1 black-text">
<center><h3> Neutral Code</br></h3></center>
</div>

<?php if(isset($_SESSION['nao_autenticado'])): ?>
<div class="notification is-danger">
<center><p class='center red-text'> Usuário ou senha inválidos</p></center>
</div>
<?php endif; unset($_SESSION['nao_autenticado']); ?>
<center>

<img src="./images/neutralcode.jpg" alt="Girl in a jacket" width="200" height="auto">


<div class="card-content">
<div class="form-field">
<label for="usuario">Login</label>
<input name="usuario" type="text"   placeholder="INSIRA SEU LOGIN" autofocus required>
</div><br>

<div class="form-field">
<label for="senha">Senha</label>
<input name="senha" type="password"   placeholder="INSIRA SUA SENHA" required >
</div><br>


<button type="submit" class="btn-small blue">Entrar</button></br></br>

<a href="../pages/recPass.php">Esqueci minha senha</a>
<br>
</center>
</body>
</html>


