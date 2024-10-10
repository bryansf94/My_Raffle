<?php

Class Comprador {
    private ?int $id_comprador;
    private ?int $fk_sorteio;
    private string $email_comprador;
    private string $nome_comprador;
    private string $sobre_nome_comprador;
    private string $tel_comprador;
    private string $insta_comprador;

    public function __construct(?int $id_comprador, ?int $fk_sorteio, string $email_comprador, string $nome_comprador, string  $sobre_nome_comprador, string $tel_comprador, string $insta_comprador)
    {
        $this->id_comprador = $id_comprador;
        $this->fk_sorteio = $fk_sorteio;
        $this->email_comprador = $email_comprador;
        $this->nome_comprador = $nome_comprador;
        $this->sobre_nome_comprador = $sobre_nome_comprador;
        $this->tel_comprador = $tel_comprador;
        $this->insta_comprador = $insta_comprador;
    }
    public function getid_comprador(): ?int
    {
        return $this->id_comprador;
    }
    public function getFk_sorteio(): ?int
    {
        return $this->fk_sorteio;
    }
    public function getEmail_comprador(): string
    {
        return $this->email_comprador;
    }
    public function getNome_comprador(): string
    {
        return $this->nome_comprador;
    }
    public function getSobreNome_comprador(): string
    {
        return $this->sobre_nome_comprador;
    }
    public function getTel_comprador(): string
    {
        return $this->tel_comprador;
    }
    public function getInsta_comprador(): string
    {
        return $this->insta_comprador;
    }
public function inserirNoBancoComprador(PDO $conexão): bool
{
    $sql = "INSERT INTO comprador_rifa (nome_comprador,sobre_nome_comprador,tel_comprador,email_comprador,insta_comprador,fk_sorteio)
            VALUES (:nome_comprador,:sobre_nome_comprador,:tel_comprador,:email_comprador,:insta_comprador,:fk_sorteio)";
    $stmt = $conexão->prepare($sql);

    $stmt->bindValue(':nome_comprador', $this->nome_comprador);
    $stmt->bindValue(':sobre_nome_comprador', $this->sobre_nome_comprador);
    $stmt->bindValue(':tel_comprador', $this->tel_comprador);
    $stmt->bindValue(':email_comprador', $this->email_comprador);
    $stmt->bindValue(':insta_comprador', $this->insta_comprador);
    $stmt->bindValue(':fk_sorteio', $this->fk_sorteio);
    
    var_dump($this->nome_comprador, $this->sobre_nome_comprador, $this->tel_comprador, $this->email_comprador, $this->insta_comprador, $this->fk_sorteio);

    return $stmt->execute();

}

    }



?>