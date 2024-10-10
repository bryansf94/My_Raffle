<?php
Class RealizarSorteio {

    private PDO $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    private function formarObjetoComprador($dados)
    {
        
    }
}
?>