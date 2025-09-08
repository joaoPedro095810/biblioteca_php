<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'pedaco.php';
    ?>
    <h2>FORMULÁRIO PARA CADASTRO DOS LIVROS</h2>
    <div class="container">
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="titulo" class="form-control" placeholder="Digite o título do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="genero" class="form-control" placeholder="Digite o gênero do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="autor" class="form-control" placeholder="Digite o autor do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="ano" class="form-control" placeholder="Digite o ano da publicação do livro">
            </div>
            <div class="mb-3">
                <input type="text" name="paginas" class="form-control" placeholder="Digite a quantidade de páginas do livro">
            </div>
            <button type="submit" class="btn btn-info">Cadastrar Livro</button>
        </form>
        <a href="index.php" type="button" class="btn btn-warning">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>