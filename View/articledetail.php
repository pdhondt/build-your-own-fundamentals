<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'includes/header.php';

?>

<article>
    <h2><?= $article->getTitle() ?></h2>
    <p><?= $article->getContent() ?></p>
</article>

<?php require 'includes/footer.php' ?>
