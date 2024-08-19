<?php

class Sorteio {
private ?int $id_sorteio;
private string $nome_sorteio;
private string $descricao_sorteio;
private ?DateTime $data_inicio;
private ?DateTime $data_fim;
private string $status;
private ?int $n_de_rifas;

public function __construct(string $nome_sorteio, string $descricao_sorteio, ?DateTime $data_inicio, ?DateTime $data_fim, string $status, ?int $n_de_rifas)
{
   
   $this->nome_sorteio = $nome_sorteio;
   $this->descricao_sorteio = $descricao_sorteio;
   $this->data_inicio = $data_inicio;
   $this->data_fim = $data_fim;
   $this->status = $status;
   $this->n_de_rifas = $n_de_rifas;

}

public function getId(): int
{
    return $this->id_sorteio;
}

public function getNome(): string
{
    return $this->nome_sorteio;
}

public function getDescricao(): string
{
    return $this->descricao_sorteio;
}

public function getDataInicio(): DateTime
{
    return $this->data_inicio;
}

public function getDatFim(): DateTime
{
    return $this->data_fim;
}

public function getStatus(): string
{
    return $this->status;
}

public function getN_de_rifas(): ?int
{
    return $this->n_de_rifas;
}
public function inserirNoBancoSorteio(PDO $conexao): bool
{
    $sql = "INSERT INTO sorteio (nome_sorteio, descricao_sorteio, data_inicio, data_fim, status, n_de_rifas) 
            VALUES (:nome_sorteio, :descricao_sorteio, :data_inicio, :data_fim, :status, :n_de_rifas)";
    $stmt = $conexao->prepare($sql);
    
    $stmt->bindValue(':nome_sorteio', $this->nome_sorteio);
    $stmt->bindValue(':descricao_sorteio', $this->descricao_sorteio);
    $stmt->bindValue(':data_inicio', $this->data_inicio?->format('Y-m-d H:i:s'));
    $stmt->bindValue(':data_fim', $this->data_fim?->format('Y-m-d H:i:s'));
    $stmt->bindValue(':status', $this->status);
    $stmt->bindValue(':n_de_rifas', $this->n_de_rifas);

    // Exibir os valores para depuração
    var_dump($this->nome_sorteio, $this->descricao_sorteio, $this->data_inicio, $this->data_fim, $this->status, $this->n_de_rifas);

    return $stmt->execute();
}

      }


?>