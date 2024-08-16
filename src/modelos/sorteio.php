<?php

class Sorteio {
private ?int $id_sorteio;
private string $nome_sorteio;
private string $descricao_sorteio;
private ?DateTime $data_inicio;
private ?DateTime $data_fim;
private string $status;

public function __construct(string $nome_sorteio, string $descricao_sorteio, ?DateTime $data_inicio, ?DateTime $data_fim, string $status)
{
   $this->id = $id_sorteio;
   $this->nome_sorteio = $nome_sorteio;
   $this->descricao_sorteio = $descricao_sorteio;
   $this->data_inicio = $data_inicio;
   $this->data_fim = $data_fim;
   $this->status = $status;

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

public function inserirNoBancoSorteio(PDO $conexao): bool
{
    $sql = "INSERT INTO sorteio (nome_sorteio, descricao_sorteio, data_inicio, data_fim, status) 
            VALUES (:nome_sorteio, :descricao_sorteio, :data_inicio, :data_fim, :status)";
    $stmt = $conexao->prepare($sql);
    
    $stmt->bindValue(':nome_sorteio', $this->nome_sorteio);
    $stmt->bindValue(':descricao_sorteio', $this->descricao_sorteio);
    $stmt->bindValue(':data_inicio', $this->data_inicio?->format('Y-m-d H:i:s'));
    $stmt->bindValue(':data_fim', $this->data_fim?->format('Y-m-d H:i:s'));
    $stmt->bindValue(':status', $this->status);

    // Exibir os valores para depuração
    var_dump($this->nome_sorteio, $this->descricao_sorteio, $this->data_inicio, $this->data_fim, $this->status);

    return $stmt->execute();
}

      }


?>