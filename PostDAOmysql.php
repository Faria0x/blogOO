<?php
require_once "config.php";
require_once "Post.php";

class PostDaoMysql implements PostDAO {

    public $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }



    public function findAll()
    {
        $array = [];
        $sql = $this->pdo->query("SELECT * FROM post");
        $data = $sql->fetchAll();
        foreach ($data as $item) {
        $p = new Post();
        $p->__set("id",$item["id"]);
        $p->__set("autor",$item["autor"]);
        $p->__set("titulo",$item["titulo"]);
        $p->__set("texto",$item["texto"]);
        $array[] = $p;
        }
        return $array;
    }

    public function addPost(Post $p) // o P É o objeto que é recebido
    {
        $sql = $this->pdo->prepare("INSERT INTO post (titulo, autor, texto) VALUES (:titulo, :autor, :texto)");
        $sql->bindValue(":titulo",$p->__get("titulo"));
        $sql->bindValue(":autor",$p->__get("autor"));
        $sql->bindValue(":texto",$p->__get("texto"));
        $sql->execute();
    }

    public function deletePost($id)
    {
        $sql = $this->pdo->prepare("DELETE FROM post WHERE id = :id");
        $sql->bindValue("id",$id);
        $sql->execute();
    }
}