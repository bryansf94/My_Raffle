<?php


if (isset($_SERVER['REQUEST_METHOD'])) {

    $nome_sorteio = $_POST['nome_sorteio'];
    $descricao_sorteio = $_POST['descricao_sorteio'];
    $data_inicio = new DateTime($_POST['data_inicio']);
    $data_fim = new DateTime($_POST['data_fim']);
    $status = $_POST['status'];
    $n_de_rifas = $_POST['n_de_rifas'];


    $sorteio = new Sorteio(
    $nome_sorteio,
    $descricao_sorteio,
    $data_inicio,
    $data_fim,
    $status,
    $n_de_rifas
);

    // Inserir dados no banco
    if ($sorteio->inserirNoBancoSorteio($conexao)) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados.";
    }
}

?>

