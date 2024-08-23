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


if (isset($_POST['nome_sorteio'])){
  $sorteio = new Produto($_POST['id_sorteio'], $_POST['nome_sorteio'], $_POST['descricao_sorteio'], $_POST['data_inicio'], $_POST['data_fim']);
}

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
 <form method="post" enctype="multipart/form-data">
      <label for="id_sorteio">ID</label>
      <input type="text" id="id_sorteio" name="id_sorteio" placeholder="Digite o nome do produto" value="<?=$_POST['id_sorteio'] ?>" required>
      <form method="post" enctype="multipart/form-data">
      
      <label for="id_sorteio">ID</label>
      <input type="text" id="nome_sorteio" name="nome_sorteio" placeholder="Digite o nome do produto" value="<?=['nome_sorteio']?>" required>
</section>   
</body>
</html>