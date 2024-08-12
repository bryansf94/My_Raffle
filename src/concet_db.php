<?php

function conectarBanco(): PDO 
{
    try {
        // Cria uma nova instância do PDO e define o modo de erro
        $pdo = new PDO('mysql:host=localhost;dbname=my_riffle', 'root', 'Pokebolavai97');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        // Exibe a mensagem de erro e retorna null
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
        return null;
    }
}

?>