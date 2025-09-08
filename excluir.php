<?php
    require 'conexao.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM livros WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "Livro excluído com sucesso!";
    } else {
        echo "Erro ao excluir livro.";
    }
?>