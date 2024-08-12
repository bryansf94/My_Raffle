<?php

require __DIR__ . '/../src/modelos/sorteio.php';
require  __DIR__ . '/cadastro_Sorteio.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome_sorteio = $_POST['nome_sorteio'];
    $descricao_sorteio = $_POST['descricao_sorteio'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $status = $_POST['status'];


    $sorteio = new sorteio(  null,  // ID auto-incrementado
    $nome_sorteio,
    $descricao_sorteio,
    $data_inicio,
    $data_fim,
    $status);

    $conexao = conectarBanco();

    // Inserir dados no banco
    if ($sorteio->inserirNoBancoSorteio($conexao)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados.";
    }
}
?>