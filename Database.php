<?php


class Database {
    public $connection;

    // public function __construct($config)
    public function __construct($config, $username = 'root', $password = '')
    {
        

        // dd(http_build_query($config, '', ';'));
        // dd('mysql:' . http_build_query($config, '', ';'));  // string(59) "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4"

        // http_build_query($data);    // example.com?host=localhost$port=3306&dbname=myapp&charset=utf8mb4
        // http_build_query($config, '', ';');    // host=localhost;port=3306;dbname=myapp;charset=utf8mb4

        // $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $dsn = 'mysql:' . http_build_query($config, '', ';');

        // $this->connection = new PDO($dsn, 'root', '', [
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query)
    {       
        $statement = $this->connection->prepare($query);
        $statement->execute();

        // return $statement->fetchAll(PDO::FETCH_ASSOC);
        // return $statement->fetch(PDO::FETCH_ASSOC);

        return $statement;
    }
}