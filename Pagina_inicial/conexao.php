<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "cadastro";

    try{
        $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    } catch(PDOException $err) {
        // echo "Erro: conexão com o banco de dados não realizado com sucesso.";
    }
?>

