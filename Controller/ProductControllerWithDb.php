<?php


class ProductControllerWithDb
{
    public function render(array $GET, array $POST): void
    {

        $pl = new ProductLoader();
        $products = $pl->getAllProducts();

        require 'View/products.php';

    }

}