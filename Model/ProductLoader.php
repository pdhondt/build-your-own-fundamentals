<?php


class ProductLoader
{
    private PDO $conn;
    private array $productArray;

    public function __construct(){
        $DB = new Database();
        $this->conn = $DB->connect();
    }

    public function getAllProducts(): ?array
    {
        $stmt = $this->conn->prepare('SELECT * FROM products');
        $stmt->execute();
        $results = $stmt->fetchAll();
        foreach ($results as $result) {
            $product = new Product((int)$result['id'], $result['name'], (float)$result['price'], (float)$result['tax']);
            $this->productArray[] = $product;
        }
        return $this->productArray;
    }

}