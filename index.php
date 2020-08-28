<?php
require "config.php";
require "Post.php";
require "PostDAOmysql.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>

<?php
$conexao = [];
$conexao = new PostDaoMysql($pdo);
$data = $conexao->findAll();
?>


<body>
    <!-- FOR EACH CRIA UM OBJETO PARA CADA OBJETO EXISTENTE NO BANCO E MOSTRA     -->
    <?php foreach($data as $item):
    ?>
    <main>
        <div class="card">
    <h1><?=$item->titulo?></h1>
    <h5><?=$item->autor?></h5>
    <p><?=$item->texto?></p>
    <a href="delete.php?id=<?=$item->id?>">EXCLUIR POST</a>
</div>
    </main>
        <?php
        endforeach?> 
         
   
</body>
</html>