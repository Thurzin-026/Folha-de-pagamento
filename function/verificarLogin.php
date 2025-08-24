<?php
require_once 'conexao.php';
session_start();

function verificarLogin() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if (empty($email) || empty($senha)) {
            echo "<div class='alert alert-danger mt-3'>
                    <p class='lead text-center'>Preencha todos os campos!</p>
                  </div>";
            return;
        }

        $conn = connect();
        $sql = "SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha'";
        $query = mysqli_query($conn, $sql);
        $usuario = mysqli_fetch_assoc($query);

        if ($usuario) {
            $_SESSION['usuario'] = $usuario;
            header('Location: index.php');
            exit;
        } else {
            echo "<div class='alert alert-danger mt-3'>
                    <p class='lead text-center'>E-mail ou senha incorretos!</p>
                  </div>";
        }
    }
}
