<?php
require_once 'livro.php';

// Cria instância do modelo
$model = new Livro();
// Pega os livros do outro arquivo
$livros = $model->listarlivros();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros de Suspense</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Livros de Suspense</h1>
        <ul class="livros-lista">
            <?php foreach ($livros as $livro): ?>
                <li class="livro-item">
                    <strong><?= $livro['nome'] ?></strong><br>
                    <span>Autor: <?= $livro['autor'] ?></span><br>
                    <span>Ano: <?= $livro['ano'] ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
