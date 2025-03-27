<?php
function listarLivros($pdo, $limit = null) {
    $sql = "SELECT * FROM livros ORDER BY data_cadastro DESC";
    if ($limit) {
        $sql .= " LIMIT " . $limit;
    }
    
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function adicionarLivro($pdo, $dados) {
    $sql = "INSERT INTO livros (titulo, autor, ano_publicacao, genero, descricao, imagem_capa) 
            VALUES (:titulo, :autor, :ano_publicacao, :genero, :descricao, :imagem_capa)";
    
    $stmt = $pdo->prepare($sql);
    
    // Upload da imagem
    if ($_FILES['imagem_capa']['error'] == UPLOAD_ERR_OK) {
        $nome_imagem = uniqid() . '_' . $_FILES['imagem_capa']['name'];
        move_uploaded_file($_FILES['imagem_capa']['tmp_name'], 'imgs/' . $nome_imagem);
        $dados['imagem_capa'] = $nome_imagem;
    } else {
        $dados['imagem_capa'] = 'default.jpg';
    }
    
    return $stmt->execute($dados);
}
?>