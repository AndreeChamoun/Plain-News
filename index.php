<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
usort($articles, "Sortbydate")
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
    <link rel="shortcut icon" href="/Images/news3.png" type="image/x-icon"/>
</head>

    <main class="main-content">
        <nav>
            <p class="today_date">
            <h1>The Leek of the Week</h1>
            </p class="news_title"> Totally real news site with real news
        </nav>

        <section class="article">
            <?php foreach ($articles as $i => $article) :?>

            <?php 
        		$title = $article["title"];
                $image = $article["image"];
                $content = $article["content"];
                $authorName = $authors[$article['authorId']]['name'];
                $authorImage = $authors[$article['authorId']]['authimage'];                        
                $published = $article["published"];
                $likes = $article["likes"];
            ?>
            
        <article id="<?php echo $i; ?>">
        <h3><?php echo $title; ?> </h3>
        <p class="Publishedinfo">Published <?php echo $published ?></p>
        <img class="articleImage" loading="lazy" src="<?php echo $image; ?>">
        <p class="contentpara"> <?php echo ($content) ?></p>
        <div class="authorWrapper">
            <div class="authorWrapper">
                <img class="authorImage" loading="lazy" src="<?php echo $authorImage; ?>"<?php echo $authorName; ?>">
                <p class="authorName"><?php echo $authorName; ?></p>
            </div>
            <div class="likescontainer">
                <div class="like"><?php echo $article['likecounter']; ?></div>
                <p class="likepara"><img class="likecounter"src="/Images/like.png" alt="likecounter"></p>
            </div>
        </div>
        </article>

            <?php endforeach ?>
        </section>
    </main>
<body>
    
</body>
</html>