<?php
session_start();
$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RJ LTDA</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">RJ LTDA</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="folha_pay.php">Folha de pagamento</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <button class="btn btn-outline-secondary rounded-2 p-0 me-1"><a class="nav-link link-dark fw-bold" href="login.php">Sair</a></button>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="mt-4 text-primary">Perfil do Funcionário</h1>

                <div class="mt-4" style="max-width: 700px; margin: 0;">
                    <h5 class="text-black mb-3 fw-bold">Dados Pessoais</h5>
                    <p><span class="fw-bold text-secondary">Nome:</span> <?php echo $usuario['nome'] ?></p>
                    <p><span class="fw-bold text-secondary">CPF:</span> <?php echo $usuario['cpf'] ?></p>
                    <p><span class="fw-bold text-secondary">E-mail:</span> <?php echo $usuario['email'] ?></p>

                    <hr class="my-4">

                    <h5 class="text-black mb-3 fw-bold">Informações Profissionais</h5>
                    <p><span class="fw-bold text-secondary">Cargo:</span> <?php echo $usuario['cargo'] ?></p>
                    <p><span class="fw-bold text-secondary">Departamento:</span> <?php echo $usuario['departamento'] ?></p>
                </div>
            </div>


        </div>
</body>
</html>