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
    <form action="criando_Sorteio.php" method="POST" class ="cadastro_sorteio">
        <img src="img/logo-banner.png" alt="logo do banner" widght=120>
        <div class="formulario_cadastro_sorteio">
            <label for="nome_sorteio">Nome do Sorteio</label>
            <input type="text" id="nome_sorteio" name="nome_sorteio" required>
        </div>
        <div class="status_cadastro_sorteio">
            <label for="status">status</label>
            <input type="text" id="status" name="status" required>
        </div>
        <div>
        <label for="descricao_sorteio">Descrição:</label><br>
        <textarea id="descricao_sorteio" name="descricao_sorteio" rows="4" cols="50">
        </textarea><br>
        </div>
        <div class="numero_Rifas_cadastro_sorteio">
            <label>Quantidade de Rifas</label>
            <input type="number" name="numero_rifas" id="quantity" name="quantity" min="0" max="500" required>
        </div>
        <div class="formulario_cadastro_sorteio">
            <label for="data_inicio">Data de inicio</label>
            <input type="date" id="data_inicio" name="data_inico" required>
        </div>
        <div class="formulario_cadastro_sorteio">
            <label for="data_fim">Data de termino</label>
            <input type="date" id="data_inicio" name="data_final" required>
        </div>
        <input type="submit" value="Enviar">
    </form>
    <h1></h1>
</body>
</html>