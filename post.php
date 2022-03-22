<?php 
//var_dump($_GET);
//exit;
//die($_GET['article']);
//echo($_GET['article']);

// Ce controller doit recevoir un parametre article
if (!isset($_GET["article"])) {
    die("Manque paramètre !");
}

include("model/post.model.php"); 

$layout_title = $title;

include("view/post.view.php"); 




