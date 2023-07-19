<?php

require 'functions.php';
// require 'router.php';

// connect to our MySQL database.
// $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4";
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

// $pdo = new PDO($dsn, 'root');
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

// dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] ."</li>";
}