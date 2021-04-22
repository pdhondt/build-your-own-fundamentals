<?php

class ProductController
{
    public function render(array $GET, array $POST): void
    {

        $product_1 = new Product(1, 'A guide to brewing the perfect Duvel', 3.5, 0.21);
        $product_2 = new Product(2, 'The secrets of the world wide web', 9000, 0.21);
        $product_3 = new Product(3, 'How to mess around instead of using a database', 10000, 0.21);

        $products = [$product_1, $product_2, $product_3];

        require 'View/products.php';

    }

}