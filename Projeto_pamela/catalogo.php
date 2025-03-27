<?php
require_once 'conexao.php';
require_once 'includes/funcoes.php';

$livros = listarLivros($pdo);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Biblioteca Virtual</title>
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
        <section class="catalogo">
            <h2>Nossa Coleção Completa</h2>
            
            <div class="filtros">
                <form method="get">
                    <input type="text" name="busca" placeholder="Buscar por título ou autor">
                    <button type="submit" class="btn">Buscar</button>
                </form>
            </div>
            
            <div class="livros-lista">
                <?php foreach ($livros as $livro): ?>
                <div class="livro" id="livro-<?= $livro['id'] ?>">
                    <img src="imgs/<?= $livro['imagem_capa'] ?>" alt="<?= $livro['titulo'] ?>">
                    <div class="info">
                        <h3><?= $livro['titulo'] ?></h3>
                        <p><strong>Autor:</strong> <?= $livro['autor'] ?></p>
                        <p><strong>Ano:</strong> <?= $livro['ano_publicacao'] ?></p>
                        <p><strong>Gênero:</strong> <?= $livro['genero'] ?></p>
                        <p><?= $livro['descricao'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

</body>
</html>