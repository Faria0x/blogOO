<?php
require_once "config.php";


class Post {
    public $id;
    public $titulo;
    public $autor;
    public $texto;


    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}


interface PostDAO {
    public function findAll();
    public function addPost(Post $p);
    public function deletePost(Post $p);
}