<?php
declare(strict_types=1);


class Database
{
    private const HOST = "localhost";
    private string $user = "becode";
    private string $pwd = "BeCode123#";
    private string $dbName = "fundamentals";

    public function connect() : PDO
    {
        $dsn = 'mysql:host=' . self::HOST . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}