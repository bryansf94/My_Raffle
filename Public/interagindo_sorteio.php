<?php


require __DIR__ . '/../src/concet_db.php';
require __DIR__ .'/../src/modelos/verSorteio.php';
require __DIR__ . '/../src/modelos/sorteio.php';


// Conectar ao banco de dados
$pdo = conectarBanco();

if ($pdo === null) {
    die('Erro ao conectar ao banco de dados.');
}


$verSorteioSelecionado = new VerSorteio($pdo);
$verSorteioSelecionado->exibirSorteioSelecionado($_POST['id_sorteio']);


var_dump($verSorteioSelecionado);
var_dump($_POST['id_sorteio']);


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
    <title>Sorteio</title>
</head>
<body>
<main>
 <section class="ver-sorteios-page">
    <img src="img/logo-banner.png" class="container-logo" alt="logo-banner">
 </section>
 <section class="container-table">
    <table>
      <thead>
      <?php if (isset($verSorteioSelecionado)): ?>
        <tr>
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
          <tr>
          <td><?= $_POST['id_sorteio'] ?> </td>
            
            <td>
            <form action="deletar_sorteio.php" method="post">
              <button type="submit">Deletar Sorteio</button>
            </fotm>
            </td>
          </tr>
      </tbody>
    </table>
    <?php else: ?>
    <p>Sorteio não encontrado ou ID inválido.</p>
<?php endif; ?>
   <a class="botao-cadastrar" href="cadastrar-produto.php">Place Holder</a>
   <form action="gerador-pdf.php" method="post">
  <input type="submit" class="botao-cadastrar" value="Place Holder"/>
  </form>
  </section>  

    
</body>
</html>