<?php

require __DIR__ . '/../src/concet_db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="\img\icone.png" type="image/x-icon">
    <link rel="stylesheet" href="css/Styles_index.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Novo Sorteio</title>
</head>
<body>
    <form class ="cadastro_sorteio">
        <img src="img/logo-banner.png" alt="logo do banner" widght=120>
        <div class="formulario_cadastro_sorteio">
            <input type="text" name="nome_sorteio" required>
            <label>Nome do Sorteio</label>
        </div>
        <div class="formulario_cadastro_sorteio">
            <input type="text" name="descricao_sorteio" required>
            <label>Descrição do Sorteio</label>
        </div>
        <div class="formulario_cadastro_sorteio">
            <input type="date" name="data_inico" required>
            <label>Data de inicio</label>
        </div>
        <div class="formulario_cadastro_sorteio">
            <input type="date" name="data_final" required>
            <label>Data de termino</label>
        </div>

    <h1>-TESTE-</h1>
</body>
</html>