<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=my_riffle', 'root', 'Pokebolavai97');
    // Defina o modo de erro do PDO para lançar exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão estabelecida com sucesso.";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>