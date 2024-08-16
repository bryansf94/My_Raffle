<?php
// Declarando o nome da Classe
// Private - Pois ela deve ser acessada e modificada apenas aqui
    class VerSorteio {

    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

private function formarObjetoSorteio ($dados)

{
    return new Sorteio($dados['id'], $dados['nome_sorteio'], 
    $dados['descricao_sorteio'], $dados['data_inicio'],
    $dados['data_fim'], $dados['status']);
}

public function exibirSorteios (): array
{
 $sql1 = "SELECT * FROM sorteio ORDER BY id";
 $statement = $this->pdo->query($sql1);
 $sorteios = $statement->fetchAll(PDO::FETCH_ASSOC);

 $dadosSorteio = array_map(function ($sorteio){
     return $this->exibirSorteios($dadosSorteio);
 }, $sorteios);

 return $dadosSorteio;
}



}

?>