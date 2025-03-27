<?php
require_once 'conexao.php';
require_once 'includes/funcoes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = [
        'titulo' => $_POST['titulo'],
        'autor' => $_POST['autor'],
        'ano_publicacao' => $_POST['ano_publicacao'],
        'genero' => $_POST['genero'],
        'descricao' => $_POST['descricao'],
        'imagem_capa' => $_FILES['imagem_capa']
    ];
    
    if (adicionarLivro($pdo, $dados)) {
        header('Location: index.php?sucesso=1');
        exit;
    } else {
        $erro = "Erro ao adicionar o livro.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Livro - Biblioteca Virtual</title>
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
        <section class="formulario">
            <h2>Adicionar Novo Livro</h2>
            
            <?php if (isset($erro)): ?>
                <div class="erro"><?= $erro ?></div>
            <?php endif; ?>
            
            <form action="adicionar.php" method="post" enctype="multipart/form-data">
                <div class="campo">
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" required>
                </div>
                
                <div class="campo">
                    <label for="autor">Autor:</label>
                    <input type="text" id="autor" name="autor" required>
                </div>
                
                <div class="campo">
                    <label for="ano_publicacao">Ano de Publicação:</label>
                    <input type="number" id="ano_publicacao" name="ano_publicacao">
                </div>
                
                <div class="campo">
                    <label for="genero">Gênero:</label>
                    <input type="text" id="genero" name="genero">
                </div>
                
                <div class="campo">
                    <label for="descricao">Descrição:</label>
                    <textarea id="descricao" name="descricao" rows="4"></textarea>
                </div>
                
                <div class="campo">
                    <label for="imagem_capa">Capa do Livro:</label>
                    <input type="file" id="imagem_capa" name="imagem_capa" accept="image/*">
                </div>
                
                <button type="submit" class="btn">Adicionar Livro</button>
            </form>
        </section>
    </main>

</body>
</html>