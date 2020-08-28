<?php

require_once "config.php";
require_once "Post.php";
require_once "PostDAOmysql.php";

$titulo = filter_input(INPUT_POST,"titulo");
$autor = filter_input(INPUT_POST,"autor");
$texto = filter_input(INPUT_POST,"texto");

$post = new Post;
$conexao = new PostDaoMysql($pdo);
$post->__set("titulo",$titulo);
$post->__set("autor",$autor);
$post->__set("texto",$texto);
$conexao->addPost($post);