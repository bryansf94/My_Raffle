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
            // Início da tabela HTML
            $html = "<table border='1'>";
            $html .= "<tr>";
            $html .= "<th>ID</th>";
            $html .= "<th>Nome</th>";
            $html .= "<th>Descrição</th>";
            $html .= "<th>Data de inicio</th>";
            $html .= "<th>Data de fim</th>";;
            $html .= "<th>Status</th>";
            $html .= "<th>n_de_rifas</th>";
            $html .= "</tr>";
    
            // Exibindo os dados de cada sorteio
            foreach ($sorteios as $row) {
                $html .= "<tr>";
                $html .= "<td>" . $row["id_sorteio"] . "</td>";
                $html .= "<td>" . $row["nome_sorteio"] . "</td>";
                $html .= "<td>" . $row["descricao_sorteio"] . "</td>";
                $html .= "<td>" . $row["data_inicio"] . "</td>";
                $html .= "<td>" . $row["data_fim"] . "</td>";
                $html .= "<td>" . $row["status"] . "</td>";
                $html .= "<td>" . $row["n_de_rifas"] . "</td>";
                $html .= "</tr>";
            }
    
            // Fim da tabela HTML
            $html .= "</table>";
        } else {
            $html = "Nenhum sorteio encontrado.";
        }
    
        return $html;
    }
    

}



?>