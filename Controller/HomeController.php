<?php


class HomeController
{
    public function render(array $GET, array $POST): void
    {
        require 'View/home.php';
    }
}