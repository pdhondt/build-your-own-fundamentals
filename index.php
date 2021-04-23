<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require 'Model/Article.php';
require 'Model/ArticleLoader.php';
require 'Model/Database.php';
require 'Model/Product.php';
require 'Model/ProductLoader.php';

//include all your controllers here
require 'Controller/HomeController.php';
require 'Controller/ArticleController.php';
require 'Controller/ProductController.php';
require 'Controller/ProductControllerWithDb.php';


if ($_GET['page'] === 'products') {
    $controller = new ProductControllerWithDb();
} else if ($_GET['page'] === 'articles') {
    $controller = new ArticleController();
} else {
    $controller = new HomeController();
}

$controller->render($_GET, $_POST);

