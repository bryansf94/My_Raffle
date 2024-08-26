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
$verSorteioSelecionado->exibirSorteioSelecionado($_POST['id_sorteio'])->$result;








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
 <div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $row):?>
            <td><?= $row['id_sorteio'] ?></td>
        
              <?php endforeach; ?>
        </tbody>
    </table>
</div>
</section>   
</body>
</html>