<?php

require_once "config.php";
require_once "Post.php";
require_once "PostDAOmysql.php";
?>


<form action="add_action.php" method="post">
Titulo: <br>
<input type="text" name="titulo" id=""><br>

Autor <br>
<input type="text" name="autor" id=""> <br>
Texto <br>
<input type="text" name="texto" id=""> <br>
<input type="submit" value="Write my post!">
</form>