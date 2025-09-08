<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'pedaco.php';
        $id = $_GET['id'];
    ?>
    <h2>FORMULÁRIO PARA ATUALIZAÇÃO DOS LIVROS</h2>
    <div class="container">
        <form action="atualizar.php?id= <?php echo $id; ?>" method="POST">

        <?php
            require 'conexao.php';
            $sql = "SELECT * FROM livros WHERE id = $id";
            $stmt = $pdo->query($sql);
            $livros = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
            
            <div class="mb-3">
                Título: <input type="text" name="novo_titulo" value="<?php echo $livros['titulo'];?>" class="form-control">
            </div>
            <div class="mb-3">
                Gênero: <input type="text" name="novo_genero" value="<?php echo $livros['genero'];?>" class="form-control">
            </div>
            <div class="mb-3">
                Autor: <input type="text" name="novo_autor" value="<?php echo $livros['autor'];?>" class="form-control">
            </div>
            <div class="mb-3">
                Ano: <input type="text" name="novo_ano" value="<?php echo $livros['ano'];?>" class="form-control">
            </div>
            <div class="mb-3">
                Páginas: <input type="text" name="novo_paginas" value="<?php echo $livros['paginas'];?>" class="form-control">
            </div>
            <button type="submit" class="btn btn-info">Atualizar Livro</button>
        </form>
        <a href="index.php" type="button" class="btn btn-warning">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>