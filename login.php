<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tradebook - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/login.css">
</head>

<body>
  <div class="container">
    <div class="card">
      <h3>Login</h3>
      <form action="login.php" method="POST">
        <div class="form-group">
          <input type="email" name="email" id="email" placeholder=" ">
          <label for="email">E-mail</label>
        </div>
        <div class="form-group">
          <input type="password" name="senha" id="senha" placeholder=" ">
          <label for="senha">Senha</label>
        </div>
        <button type="submit">Entrar</button>
      </form>
      <p>Não tem conta? <a href="cadastro.php">Cadastre-se</a></p>
      <?php
      require_once('./function/verificarLogin.php');
      verificarLogin();
      ?>
    </div>
  </div>
</body>

</html>