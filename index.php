<?php

require 'functions.php';
require 'Database.php';

// $config = [
//     'host' => 'localhost',
//     'port' => 3306,
//     'dbname' => 'myapp',
//     'charset' => 'utf8mb4'
// ];

// $config = require('config.php');
$config = require'config.php';

// $db = new Database($config);
$db = new Database($config['database']);

// $post = $db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC);
// $posts = $db->query("select * from posts where id = 1")->fetchAll();
$posts = $db->query("select * from posts")->fetchAll();

dd($posts);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] ."</li>";
}