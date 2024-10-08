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

    public function exibirSorteioSelecionado(?int $id_sorteio): array 
    {
        $sql1 = "SELECT * FROM sorteio where id_sorteio = ?"; 
        $statement = $this->pdo->prepare($sql1);
        $sorteios = $statement->fetchAll(PDO::FETCH_ASSOC);

        $dadosSorteio2 = array_map(function ($sorteio) {
            return $this->formarObjetoSorteio($sorteio);
        }, $sorteios);

        return $dadosSorteio2;
    }
}
?>
