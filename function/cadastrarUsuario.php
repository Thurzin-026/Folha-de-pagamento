<?php
require_once 'manipularDados.php';
function cadastrarUsuario(){
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $cargo = $_POST['cargo'];
    $departamento = $_POST['departamento'];

    switch ($cargo) {
      case 'Desenvolvedor':
        $salario = 6000;
        break;
      case 'Analista de Sistemas':
        $salario = 5500;
        break;
      case 'Técnico de Suporte':
        $salario = 3000;
        break;
      case 'Gerente de Projetos':
        $salario = 8500;
        break;
      case 'Estagiário':
        $salario = 1200;
        break;
    }


    // Verificação de campos
    if (empty($nome) || empty($email) || empty($senha) || empty($cpf) || empty($cargo) || empty($departamento)) {
      echo "
        <div class='alert alert-danger mt-3'>
          <p class='lead text-center'>Preencha todos os campos!</p>
        </div>";
      return;
    }

    $tabela = 'funcionario';
    $campos = "nome, email, senha, cpf, cargo, departamento, salario";
    $valores = "'$nome', '$email', '$senha', '$cpf', '$cargo', '$departamento', '$salario'";
    $campoId = "cpf";
    $valorId = "'$cpf'";

    if (seExiste($tabela, $campoId, $valorId) == 1) {
      echo "
        <div class='alert alert-danger mt-3'>
          <p class='lead text-center'>O usuário já existe!</p>
        </div>";
    } else if (inserir($tabela, $campos, $valores)) {
      echo "
        <div class='alert alert-success mt-3'>
          <p class='lead text-center'>Usuário cadastrado com sucesso!</p>
        </div>";
      exit;
    } else {
      echo "
        <div class='alert alert-danger mt-3'>
          <p class='lead text-center'>Erro ao cadastrar usuário!</p>
        </div>";
    }
  }
}
