<?php
session_start();
$usuario = $_SESSION['usuario'];

if (!isset($usuario)) {
    header('Location: login.php');
    exit;
}

$salario = $usuario['salario'];

function calcularINSS($salario){
    if ($salario = 1200) {
        return $salario * 0.075;

    } else if ($salario = 3000) {
        return $salario * 0.09;

    } else if ($salario = 5500) {
        return $salario * 0.12;

    } else if ($salario = 6000) {
        return $salario * 0.14;

    } else if ($salario = 8500) {
        return $salario * 0.15;
    }
    return 0;
}

function calcularIRPF($salario)
{
    if ($salario = 1200) {
        return 0;

    } else if ($salario = 3000) {
        return ($salario * 0.075) - 158;

    } else if ($salario = 5500) {
        return ($salario * 0.15) - 370;

    } else if ($salario = 6000) {
        return ($salario * 0.225) - 651;
        
    } else if ($salario = 8500) {
        return ($salario * 0.275) - 884;
    }
}

$inss = calcularINSS($salario);
$irpf = calcularIRPF($salario);
$valeTransporte = 200.00;

$totalDescontos = $inss + $irpf + $valeTransporte;
$salarioLiquido = $salario - $totalDescontos;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Recibo de Pagamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td,
        th {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input {
            width: 100%;
            padding: 4px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="flex-grow-1 text-center m-0">Recibo de Pagamento de Salário</h2>
        <a href="index.php" class="btn btn-outline-secondary ms-3">Voltar</a>
    </div>

    <table>
        <tr>
            <td colspan="2">Empresa: RJ LTDA</td>
            <td colspan="2">CNPJ: 12.345.678/0001-99</td>
        </tr>
        <tr>
            <td colspan="2">Funcionário: <?php echo $usuario['nome']; ?></td>
            <td colspan="2">CPF: <?php echo $usuario['cpf']; ?></td>
        </tr>
        <tr>
            <td colspan="2">Cargo: <?php echo $usuario['cargo']; ?></td>
            <td colspan="2">Departamento: <?php echo $usuario['departamento']; ?></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <th>Descrição</th>
            <th>Referência</th>
            <th>Proventos (R$)</th>
            <th>Descontos (R$)</th>
        </tr>
        <tr>
            <td>Salário Base</td>
            <td>30 dias</td>
            <td><?php echo $salario; ?></td>
            <td>-</td>
        </tr>
        <tr>
            <td>INSS</td>
            <td>-</td>
            <td>-</td>
            <td><?php echo $inss; ?></td>
        </tr>
        <tr>
            <td>IRPF</td>
            <td>-</td>
            <td>-</td>
            <td><?php echo $irpf; ?></td>
        </tr>
        <tr>
            <td>Vale Transporte</td>
            <td>Valor fixo</td>
            <td>-</td>
            <td><?php echo $valeTransporte; ?></td>
        </tr>
        <tr>
            <td colspan="2"><strong>Salário Bruto</strong></td>
            <td><strong><?php echo $salario; ?></strong></td>
            <td><strong><?php echo $totalDescontos; ?></strong></td>
        </tr>
        <tr>
            <td colspan="2"><strong>Salário Líquido</strong></td>
            <td colspan="2"><strong>R$ <?php echo $salarioLiquido; ?></strong></td>
        </tr>
    </table>
</body>

</html>