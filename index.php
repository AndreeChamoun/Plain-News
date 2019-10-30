<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Leek of the Week</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="favicon" href="noun_news_1322437.png" type="image/png">
</head>

    <main class="main-content">
        <nav>
            <p class="today_date">
            <h1>Plain News</h1>
            </p class="news_title"> Totally real news site with real news
        </nav>

        <section class="article">
            <?php foreach ($articles as $i => $article) :?>

            <?php 
        		$title = $article["title"];
                $image = $article["image"];
                $content = $article["content"];
                $authorName = $authors[$article['authorId']]['name'];
                $authorImage = $authors[$article['authorId']]['authimage'];                        $published = $article["published"];
                $likes = $article["likes"];
            ?>
        

            <?php endforeach ?>
        </section>
    </main>
<body>
    
</body>
</html>