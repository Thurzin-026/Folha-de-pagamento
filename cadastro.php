<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<style>
  body {
    height: 100%;
    margin: 0;
    font-family: sans-serif;
    background: #f8f9fa;
  }

  .container {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .card {
    max-width: 400px;
    width: 100%;
    background: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
  }

  .card h3 {
    margin-bottom: 20px;
  }

  .form-group {
    position: relative;
    margin-bottom: 20px;
  }

  input {
    width: 100%;
    padding: 12px 10px;
    border: 1px solid #333;
    border-radius: 4px;
    font-size: 16px;
    background: transparent;
    outline: none;
  }

  label {
    position: absolute;
    top: 12px;
    left: 12px;
    background: #fff;
    padding: 0 4px;
    color: #555;
    font-size: 16px;
    transition: 0.3s;
  }

  input:focus+label,
  input:not(:placeholder-shown)+label {
    top: -7px;
    left: 8px;
    font-size: 12px;
    color: #008000;
  }

  button {
    width: 100%;
    background: #008000;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
  }

  button:hover {
    background: #008000;
  }

  a {
    color: #008000;
  }
</style>

<body>
  <div class="container">
    <div class="card">
      <h3>Cadastro</h3>
      <form action="cadastro.php" method="POST">
        <div class="form-group">
          <input type="text" name="nome" id="nome" placeholder=" ">
          <label for="nome">Nome</label>
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" placeholder=" ">
          <label for="email">E-mail</label>
        </div>
        <div class="form-group">
          <input type="password" name="senha" id="senha" placeholder=" ">
          <label for="senha">Senha</label>
        </div>
        <div class="form-group">
          <input type="text" name="cpf" id="cpf" placeholder=" ">
          <label for="cpf">CPF</label>
        </div>
        <div class="form-group">
          <select name="cargo" id="cargo" class="form-select" required>
            <option value="">Selecione o cargo</option>
            <option value="Desenvolvedor">Desenvolvedor</option>
            <option value="Analista de Sistemas">Analista de Sistemas</option>
            <option value="Técnico de Suporte">Técnico de Suporte</option>
            <option value="Gerente de Projetos">Gerente de Projetos</option>
            <option value="Estagiário">Estagiário</option>
          </select>

          <select name="departamento" id="departamento" class="form-select" required>
            <option value="">Selecione o departamento</option>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Recursos Humanos">Recursos Humanos</option>
            <option value="Financeiro">Financeiro</option>
            <option value="Administrativo">Administrativo</option>
            <option value="Projetos">Projetos</option>
          </select>
        </div>
        <!-- Campo oculto para o salário -->
        <input type="hidden" name="salario" id="salario">

        <button type="submit" class="control rounded-2">Cadastrar</button>
      </form>
      <p class="mt-3">Já tem conta? <a href="login.php">Logar</a></p>
      <?php
      require_once './function/cadastrarUsuario.php';
      cadastrarUsuario()
      ?>
    </div>
  </div>
</body>

</html>