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
 <section class="container-table">
    <table>
      <thead>
        <tr>
          <th>iD Sorteio</th>
          <th>Nome Sorteio</th>
          <th>Descricão</th>
          <th>Data inicio</th>
          <th>Data Fim</th>
          <th>Status</th>
          <th>Nº de Rifas</th>
          <th>Ir para Sorteio?</th>
          <th>Deletar Sorteio?</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($sorteio as $sorteio): ?>
          <tr>
            <td><?= $sorteio->getId() ?></td>
            <td><?= $sorteio->getNome() ?></td>
            <td><?= $sorteio->getDescricao() ?></td>
            <td><?= $sorteio->getDataInicio()->format('Y-m-d H:i:s') ?></td> <!-- Convertendo DateTime para string -->
            <td><?= $sorteio->getDatFim()->format('Y-m-d H:i:s') ?></td> <!-- Convertendo DateTime para string -->
            <td><?= $sorteio->getStatus() ?></td>
            <td><?= $sorteio->getN_de_rifas() ?></td>
            <td>
            <form action="interagindo_sorteio.php" method="post" target="_blank">
              <input type="hidden" name="id_sorteio" value="<?= $sorteio->getId() ?>">
              <button type="submit">Ir para sorteio</button>
            </form>
             <td>
            </td>
          </tr>
      <?php endforeach; ?>


      </tbody>
    </table>
   <a class="botao-cadastrar" href="cadastrar-produto.php">Place Holder</a>
   <form action="gerador-pdf.php" method="post">
  <input type="submit" class="botao-cadastrar" value="Place Holder"/>
  </form>
  </section>  
</body>
</main>
</html>