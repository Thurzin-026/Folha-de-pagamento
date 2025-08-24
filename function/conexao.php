<?php
function connect(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "dbempresa";

    try {
        $conn = mysqli_connect($host,$user,$pass,$db);
    if (!$conn) {
        echo "Erro ao conectar";
    } else {
        return $conn;
    }
    } catch (Exception $e) {
        echo "Erro de conexão". $e->getMessage();
    }
}