<?php

// Home model

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query = "
    SELECT post_ID, post_date, LEFT(post_content, " . TRONCATURE . ") AS post_content, post_title, display_name, cat_descr 
    FROM blog_posts
    
    INNER JOIN blog_users
    ON post_author = ID
    
    INNER JOIN blog_categories
    ON post_category = cat_id
    
    ORDER BY post_date DESC";

    //die($query);

    $req = $pdo->query($query);

    $data = $req->fetchAll();

} catch(Exception $e) {
    die("Erreur MySQL : " . $e->getMessage());
}

$bg = 'assets/img/home-bg.jpg';
$title = 'Blog de surf';
$subtitle = 'Le meilleur sport de glisse !';

/*
$title_art_1 = 'Planche de surf';
$subtitle_art_1 = 'Comment bien la choisir ?';
$author_art_1 = 'Philippe G.';
$date_art_1 = '17 Mars 2022';
*/