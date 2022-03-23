<?php

// Post model

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query = "
    SELECT post_date, post_content, post_title, post_img_url, display_name, cat_descr 
    FROM blog_posts
    
    INNER JOIN blog_users
    ON post_author = ID
    
    INNER JOIN blog_categories
    ON post_category = cat_id
    
    WHERE post_ID = " . $_GET["article"];

    //die($query);

    $req = $pdo->query($query);

    $data = $req->fetch();
    //var_dump($data); 

} catch(Exception $e) {
    die("Erreur MySQL : " . $e->getMessage());
}







/*
if ( (!isset($_GET['article'])) || ($_GET['article'] == '1') ) {

    $bg = 'assets/img/post-bg.jpg';
    $color = "green";
    $title = 'Planche de surf';
    $subtitle = 'Comment bien la choisir ?';
    $content = 'Vous commencez à prendre vos premières <b>vagues</b> et souhaitez passer le cap dans la pratique de votre sport préféré ? Sans doute le moment est-il venu de vous offrir votre première planche de surf ! Petit bémol : il existe presqu’autant de modèle que de shapers… Aussi, choisir sa planche de surf peut s’avérer un peu plus compliqué qu’on ne le croit au premier abord.

    Quel shape est fait pour vous ? Quel type de vagues voulez-vous surfer ? Comment va-t-elle se comporter à la rame ? Quid du poids et de la <a href="#">taille</a> ?

    Tous ces éléments – vous l’aurez devinez – et bien d’autres encore, vont être déterminant pour votre montée en niveau. Dans cet article, on vous livre tous les secrets pour choisir la planche de surf en adéquation avec votre niveau et vos objectifs !

    <style>
        .test {
            color: ' . $color . ';
        }
    </style>

    1. Pourquoi choisir sa planche de surf ?
    2. Quels sont les différents types de planche de surf ? 
    3. Comment choisir sa planche de surf ?
    4. Où acheter sa <span class="test">planche de surf</span> ?';
}

else if ($_GET['article'] == '2') {

    $bg = 'https://www.surfcamp.fr/wp-content/uploads/2020/08/image-2020-08-27T170705.195-1536x485.jpg';
    $title = 'Découvrez notre sélection';
    $subtitle = 'Les dix meilleurs spots de surf en France';
    $content = 'En matière de surf, la France pourrait bien avoir son mot à dire. Si la culture surf y est aussi bien implantée depuis tant d’année, c’est pour de nombreuses raisons. La principale d’entre elle est sans doute la multitude de spots qu’elle offre sur un si petit territoire. De Dunkerque à Hendaye, du Pas-de-Calais au Pays Basque, en passant par la Normandie, la Bretagne, la Vendée, la Charentes, la Gironde et les Landes, le surf en France n’a jamais été aussi développé qu’à l’heure actuelle. Bon présage pour certains, exaspérant pour d’autre, les chiffres sont là : chaque année, de plus en plus d’adeptes rejoignent l’aventure et se lancent à l’eau, planche sous le bras. En parallèle de la demande croissante, de plus en plus d’écoles de surf ouvrent, de plus en plus de professeurs de surf son diplômés, de plus en plus de planches sont vendus.';
}

else if ($_GET['article'] == '3') {

    $bg = 'https://www.surfcamp.fr/wp-content/uploads/2020/08/image-90-1536x485.jpg';
    $title = 'Évasion et aventure';
    $subtitle = 'Un séjour surf entre amis en Indonésie';
    $content = 'L’Indonésie peut faire profiter aux passionnés de voyage une expérience inédite et inoubliable durant leurs vacances sur place. Pour se faire plaisir, ils peuvent découvrir l’une des activités les plus prisées dans le pays : le surf. Cette discipline figure parmi les meilleures choses à faire dans cette contrée asiatique durant un séjour en famille ou entre amis. Avant de s’offrir un premier baptême de surf, l’idéal est de suivre des cours dans un centre agréé. Ainsi, chaque touriste aura l’opportunité d’apprendre toutes les techniques de base de ce sport aquatique. Sa pratique contribue largement à une expérience émouvante et sensationnelle. Concernant l’équipement pour surfer, les vacanciers peuvent louer leurs planches auprès des prestataires locaux. Quant aux spots de surf en Indonésie, les plus convoités se localisent sur l’île de Java. Cela dit, il ne faut pas manquer les incontournables breaks à Batu Karas, Cimaja et Pacitan.';
}

else {

    $bg = 'https://www.codeur.com/blog/wp-content/uploads/2019/05/corriger-erreur-404-700x525.jpg';
    $title = 'Erreur 404';
    $subtitle = 'Page inexistante !';
    $content = '';
}
*/