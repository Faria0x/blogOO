<?php

require_once "config.php";
require_once "Post.php";
require_once "PostDAOmysql.php";

$id = filter_input(INPUT_GET,"id");


$p = new Post;
$conexao = new PostDaoMysql($pdo);
$conexao->deletePost($id);
echo "Post deletado com sucesso";