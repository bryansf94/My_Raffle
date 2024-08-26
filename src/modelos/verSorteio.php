<?php
// Declarando o nome da Classe
class VerSorteio {

    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    private function formarObjetoSorteio($dados)
    {
        return new Sorteio(
           
            $dados['id_sorteio'],
            $dados['nome_sorteio'],
            $dados['descricao_sorteio'],
            new DateTime($dados['data_inicio']),
            new DateTime($dados['data_fim']),
            $dados['status'],
            $dados['n_de_rifas']
        );
    }

    public function exibirSorteios(): array
    {
        $sql1 = "SELECT * FROM sorteio"; // Fechar a string corretamente
        $statement = $this->pdo->query($sql1);
        $sorteios = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dadosSorteio = array_map(function ($sorteio) {
            return $this->formarObjetoSorteio($sorteio);
        }, $sorteios);

        return $dadosSorteio;
    }

    public function exibirSorteioSelecionado(?int $id_sorteio) 
{
    // Preparando a consulta SQL
    $sql1 = "SELECT * FROM sorteio WHERE id_sorteio = ?"; 
    $statement = $this->pdo->prepare($sql1);
    
    // Vinculando o parâmetro
    $statement->bindValue(1, $id_sorteio, PDO::PARAM_INT);
    
    
    // Executando a consulta
    $statement->execute();

    // Verificando se há resultados
    $sorteios = $statement->fetchAll(PDO::FETCH_ASSOC);
    if (count($sorteios) > 0) {
        // Exibindo os dados de cada sorteio
        foreach ($sorteios as $row) {
            echo "id: " . $row["id_sorteio"] . " - Nome: " . $row["nome_sorteio"] . "<br>";
        }
    } else {
        echo "0 resultados";
    }

    // Mapeando os resultados para objetos, se necessário
    $dadosSorteio2 = array_map(function ($sorteio) {
        return $this->formarObjetoSorteio($sorteio);
    }, $sorteios);

    return $dadosSorteio2;
    $result = $stmt->get_result();
    
    // Retorna os resultados como um array associativo
    return $result->fetch_all(MYSQLI_ASSOC);
}


}
?>