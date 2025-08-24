<?php
require_once './function/conexao.php';
/**Função para inserir dados */
function inserir($tabela, $campos, $valores){
    
    if(!$conn = connect()){
        echo 'Erro de conexão ao inserir dados.';
        return null;
    }

    try {
        $sql = "INSERT INTO $tabela ($campos) VALUES ($valores)";
        if(mysqli_query($conn, $sql)){
            return "Cadastro realizado com sucesso!";
        }
    } catch (Exception $e) {
        return "Erro de SQL: {$e->getMessage()} <p>SQL: </p> ";
    }
}
/**Função para apagar dados */
function apagar($tabela, $campoId, $valorId){
    if(!$conn = connect()){
        echo "Erro de conexao ao apagar o dado.";
        return null;
    }

    try {
        $sql = "DELETE FROM $tabela WHERE $campoId = $valorId";
        return (mysqli_query($conn, $sql)) ? "Dado apagado com sucesso!" : "Não foi possível apagar o dado!";
    } catch (Exception $e) {
        return "Erro de SQL: {$e->getMessage()} <p>SQL: </p> ";
    }
}
/**Função para atualizar dado */
function atualizar($tabela, $valor, $campoId, $valorId){
    
    if (!$conn = connect()){
        echo "Erro de conexão ao atualizar o dado!";
        return null;
    }

    try {
        $sql = "UPDATE $tabela SET $valor WHERE $campoId = $valorId";
        return (mysqli_query($conn, $sql)) ? "Dados atualizados com sucesso" : "Erro ao atualizar os dados!";
    } catch (Exception $e) {
        return "Erro de SQL: {$e->getMessage()} <p>SQL: </p> ";
    }
}

/**Função para verificar se o dado existe no banco */
function seExiste($tabela, $campoId, $valorId){
    
    if(!$conn = connect()){
        echo "Erro de conexão ao verificar se o dado existe!";
        return null;
    }
    try {
        $sql = "SELECT $campoId FROM $tabela WHERE $campoId = $valorId";
        $query = mysqli_query($conn, $sql);
        $resultado = mysqli_num_rows($query);
        return $resultado;
    } catch (Exception $e) {
        return "Erro de SQL: {$e->getMessage()} <p>SQL: $sql</p> ";
    }
}