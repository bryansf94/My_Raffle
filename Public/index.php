<?php

require __DIR__ . '/../src/concet_db.php';

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="icon" href="\img\icone.png" type="image/x-icon">
  <link rel="stylesheet" href="css/Styles_index.css">
  <link rel="stylesheet" href="css/reset.css">
  <title>Home Page - My Riffle</title>
</head>
<body>
  <main>
    <img src="img/logo-banner.png" class="container-logo" alt="logo-banner">
    <div class="container">
    <div class="texto-logo">
      <h1>- Bem vindo ao MyRiffle! Você está com sorte hoje? -</h1>
    <div class="texto-menu">
        <h2>- Faça sua Escolha -</h2>
      </div>
        <div class="container-novo_sorteio">
          <a href="https://www.google.com/">
          <h1 id="titulo_novo_sorteio" class="hidden_novo_sorteio">Novo Sorteio+</h1>
          <img src="img/login-icone.JPEG" class="container-novo_sorteio" alt="icone-novo-sorteio" id="login-icone">
          </a>
        </div>
        <div class="container-novo_texto">
          <a href="https://www.google.com/">
          <h1 id="titulo_sorteio" class="hidden_texto_sorteio">Ver Sorteios</h1>
          <img src="img/ver_sorteio.JPEG" alt="Ver Sorteios">
          </a>
        </div>
        <div class="container-sorteio_teste">
          <a href="https://www.google.com/">
          <h1 id="titulo_sorteio_teste" class="hidden_sorteio_teste">Demo</h1>
          <img src="img/sorteio_teste.JPEG" alt="Sorteio Teste">
          </a>
        </div>
      </div>
      <div class="container-icon-back_01">
        <img src="img/icon_back_01.png" class="container-icon-back_01" alt="icon_back_01">
      </div>
      <div class="container-icon-back_02">
        <img src="img/icon_back_02.png" class="container-icon-back_02" alt="icon_back_02">
      </div>
    </div>
  </main>
  <script src="js\script.js"></script>
</body>
</html>
