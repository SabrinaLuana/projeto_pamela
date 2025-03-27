<?php
require_once 'conexao.php';
require_once 'includes/funcoes.php';

$livros = listarLivros($pdo, 6);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual - Home</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="adicionar.php">Adicionar Livro</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="sobre.php">Sobre</a></li>
        </ul>
    </nav>

    <main>
        <section class="destaque">
            <h2>Livros Recentes</h2>
            <div class="cards-container">
                <?php foreach ($livros as $livro): ?>
                <div class="card">
                    <img src="imgs/<?= $livro['imagem_capa'] ?>" alt="<?= $livro['titulo'] ?>">
                    <h3><?= $livro['titulo'] ?></h3>
                    <p><strong>Autor:</strong> <?= $livro['autor'] ?></p>
                    <p><strong>Ano:</strong> <?= $livro['ano_publicacao'] ?></p>
                    <a href="catalogo.php#livro-<?= $livro['id'] ?>" class="btn">Ver Detalhes</a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

</body>
</html>