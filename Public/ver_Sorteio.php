<?php


require __DIR__ . '/../src/concet_db.php';
require __DIR__ .'/../src/modelos/verSorteio.php';
require __DIR__ . '/../src/modelos/sorteio.php';

// Conectar ao banco de dados
$pdo = conectarBanco();

if ($pdo === null) {
    die('Erro ao conectar ao banco de dados.');
}


$verSorteio = new VerSorteio($pdo);
$sorteio = $verSorteio->exibirSorteios();


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
    <link rel="stylesheet" href="css/admin.css">
    <title>Ver Sorteios</title>
</head>
<body>
<main>
 <section class="ver-sorteios-page">
    <img src="img/logo-banner.png" class="container-logo" alt="logo-banner">
    <h1>vendo sorteios<h1>
 </section>
 <h2>Lista de sorteios<h2>
 <section class="container-table">
    <table>
      <thead>
        <tr>
          <th>Nome Sorteio</th>
          <th>Descricão</th>
          <th>Data inicio</th>
          <th>Data Fim</th>
          <th>Status</th>
          <th colspan="2">Ação</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($sorteio as $sorteio): ?>
          <tr>
            <td><?= $sorteio->getNome() ?></td>
            <td><?= $sorteio->getDescricao() ?></td>
            <td><?= $sorteio->getDataInicio() ?></td>
            <td><?= $sorteio->getDatFim() ?></td>
            <td><?= $sorteio->getStatus() ?></td>
            </td>
          </tr>
      <?php endforeach; ?>


      </tbody>
    </table>
  <a class="botao-cadastrar" href="cadastrar-produto.php">Cadastrar produto</a>
  <form action="gerador-pdf.php" method="post">
    <input type="submit" class="botao-cadastrar" value="Baixar Relatório"/>
  </form>
  </section>  
</body>
</main>
</html>