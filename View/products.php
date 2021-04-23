<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'includes/header.php';

?>

<?php foreach ($products as $product) : ?>
    <div>
        <h2><?= $product->getName() ?></h2>
        <p>Price (tax included): €<?= round($product->getPrice() * (1 + $product->getTax()), 2) ?></p>
    </div>
<?php endforeach; ?>

<?php require 'includes/footer.php' ?>
