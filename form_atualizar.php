<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'pedaco.php';
        $id = $_GET['id'];
    ?>
    
    <h2>Formulário para Atualização de Livro</h2>
    <div class="container">
        <form action="atualizar.php?id=<?php echo $id; ?>" method="POST">

        <?php            
            require 'conexao.php';
            $sql = "SELECT * FROM livros WHERE id = $id";
            $stmt = $pdo->query($sql);
            $livros = $stmt->fetch(PDO::FETCH_ASSOC); 
            
        ?>
            <div class="mb-3">                
                Titulo:<input type="text" class="form-control"  value= "<?php echo $livro['titulo']; ?>" name = "novo_titulo">
            </div>
            <div class="mb-3">                
                Genero:<input type="text" class="form-control"  value= "<?php echo $livro['genero']; ?>" name = "novo_titulo">   
            </div>
            <div class="mb-3">                
                AUTOR:<input type="text" class="form-control"  value= "<?php echo $livro['autor']; ?>" name = "novo_titulo">       
            </div>
            <div class="mb-3">                
                ANO:<input type="text" class="form-control"  value= "<?php echo $livro['ano']; ?>" name = "novo_titulo">              
            </div>
            <div class="mb-3">                
                PAGINAS<input type="text" class="form-control"  value= "<?php echo $livro['paginas']; ?>" name = "novo_titulo">          
            </div>  
            <div>
                
            <button type="submit" class="btn btn-primary">ATUALIZAR LIVRO</button>
        </div>
        </form>
        <a class="btn btn-danger mb-3" href="index.php" type="button" class="btn btn-primary">Voltar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>