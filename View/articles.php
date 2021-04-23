<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'includes/header.php';

?>

<?php foreach ($articles as $article) : ?>
    <div>
        <h2><?= $article->getTitle() ?></h2>
        <a href="?page=articles&run=article-detail&article_slug=<?= $article->getSlug() ?>">Tell me more</a>
    </div>
<?php endforeach; ?>

<?php require 'includes/footer.php' ?>