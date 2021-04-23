<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php // TODO: a dynamic title, changing per page would be better right? ?>
    <title>Articles</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="?page=articles">Articles</a></li>
        <li><a href="?page=products"> Products</a></li>
    </ul>
</nav>

<?php foreach ($articles as $article) : ?>
    <div>
        <h2><?= $article->getTitle() ?></h2>
        <a href="?page=articles&run=article-detail&article_slug=<?= $article->getSlug() ?>">Tell me more</a>
    </div>
<?php endforeach; ?>

</body>
</html>
